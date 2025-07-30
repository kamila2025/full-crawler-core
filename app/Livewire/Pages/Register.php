<?php

namespace App\Livewire\Pages;

use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Register extends Component
{
    public $phone;
    public $password;
    public $confirmPassword;

    protected $listeners = ['redirectHome'];

    public function redirectHome()
    {
        return redirect()->route('home');
    }

    public function register()
    {
        try{
            DB::beginTransaction();

            $attributes = $this->validate([
                'phone'             => 'required|max:10',
                'password'          => 'required|max:255|min:6',
                'confirmPassword'   => 'required|max:255|min:6|same:password',
            ], [], [
                'phone'             => '手機號碼',
                'password'          => '密碼',
                'confirmPassword'   => '確認密碼',
            ]);

            // 檢查信箱是否已被註冊
            $existingMember = Member::where('phone', $attributes['phone'])->first();
            if ($existingMember) {
                LivewireAlert::title('註冊失敗')
                    ->text('該手機號碼已被註冊')
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
                return;
            }

            // 註冊會員
            Member::create([
                'phone'     => $attributes['phone'],
                'password'  => Hash::make($attributes['password']),
            ]);

            // 登入會員
            Auth::guard('member')->attempt([
                'phone'     => $attributes['phone'],
                'password'  => $attributes['password'],
            ]);

            DB::commit();

            LivewireAlert::title('註冊成功')
                    ->success()
                    ->withConfirmButton('OK')
                    ->onConfirm('redirectHome')
                    ->show();
        }
        catch (\Throwable $e) {
            DB::rollBack();

            LivewireAlert::title('註冊失敗')
                    ->text($e->getMessage())
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
        }
    }

    public function render()
    {
        return view('livewire.pages.register')
            ->layout('components.layouts.app', [
                'title' => '會員註冊',
            ]);
    }
}
