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
    public $email;
    public $password;
    public $confirmPassword;

    protected $listeners = ['redirectLogin'];

    public function redirectLogin()
    {
        return redirect()->route('login');
    }

    public function register()
    {
        try{
            DB::beginTransaction();

            $attributes = $this->validate([
                'email'             => 'required|email|max:255|unique:members,email',
                'password'          => 'required|max:255|min:6',
                'confirmPassword'   => 'required|max:255|min:6|same:password',
            ], [], [
                'email'             => '信箱',
                'password'          => '密碼',
                'confirmPassword'   => '確認密碼',
            ]);

            // 檢查信箱是否已被註冊
            $existingMember = Member::where('email', $attributes['email'])->first();
            if ($existingMember) {
                LivewireAlert::title('註冊失敗')
                    ->text('該信箱已被註冊')
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
                return;
            }

            // 註冊會員
            Member::create([
                'email'     => $attributes['email'],
                'password'  => Hash::make($attributes['password']),
            ]);

            // 登入會員
            Auth::guard('member')->attempt([
                'email'     => $attributes['email'],
                'password'  => $attributes['password'],
            ]);

            DB::commit();

            LivewireAlert::title('註冊成功')
                    ->success()
                    ->withConfirmButton('OK')
                    ->onConfirm('redirectLogin')
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
