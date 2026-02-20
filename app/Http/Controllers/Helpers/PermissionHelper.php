<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('checkPermission')) {
    /**
     * Verifica se o usuário atual tem permissão para acessar um recurso.
     * Se não tiver, retorna a view 403.
     *
     * @param string $permission
     * @param mixed $settingTheme
     * @return bool|\Illuminate\View\View
     */
    function checkPermission(string $permission, $settingTheme)
    {
        $user = Auth::user();

        if (!$user) {
            return view('admin.error.403', compact('settingTheme'));
        }

        if (
            !$user->hasRole('Super') &&
            !$user->can('usuario.tornar usuario master') &&
            !$user->hasPermissionTo($permission)
        ) {
            return view('admin.error.403', compact('settingTheme'));
        }

        return true; // tem permissão
    }
}