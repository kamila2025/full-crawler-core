<?php

namespace App\Livewire\Pages;

use App\Enums\Member\MemberStatusEnum;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Login extends Component
{
    public $phone;
    public $password;
    public $remember = false;

    protected $listeners = ['redirectHome'];

    public function redirectHome()
    {
        return redirect()->route('home');
    }

    public function login()
    {
        try{
            $attributes = $this->validate([
                'phone'             => 'required|max:10',
                'password'          => 'required|max:255|min:6',
            ], [], [
                'phone'             => '手機號碼',
                'password'          => '密碼',
            ]);

            $member = Member::where('phone', $attributes['phone'])->first();
            if (!$member || $member->status == MemberStatusEnum::停用) {
                LivewireAlert::title('登入失敗')
                    ->text('帳號不存在或已停用')
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
                return;
            }

            $success = Auth::guard('member')->attempt([
                'phone'    => $attributes['phone'],
                'password' => $attributes['password'],
            ], $this->remember);


            if (!$success) {
                LivewireAlert::title('登入失敗')
                    ->text('手機號碼或密碼錯誤')
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
                return;
            }

            LivewireAlert::title('登入成功')
                ->success()
                ->withConfirmButton('OK')
                ->onConfirm('redirectHome')
                ->show();
            }
        catch (\Throwable $e) {
            LivewireAlert::title('登入失敗')
                    ->text($e->getMessage())
                    ->error()
                    ->withConfirmButton('OK')
                    ->show();
        }
    }

    public function render()
    {
        return view('livewire.pages.login')
            ->layout('components.layouts.app', [
                'title' => '會員登入',
            ]);
    }
}
