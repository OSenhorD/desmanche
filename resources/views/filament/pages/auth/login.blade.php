<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AutoParts Pro</title>
    @filamentStyles
    @livewireStyles
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #0d1117;
            overflow: hidden;
        }

        /* Remover scrollbar */
        ::-webkit-scrollbar {
            display: none;
        }

        * {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .login-page {
            display: grid;
            grid-template-columns: 55% 45%;
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        /* ---- Lado Esquerdo ---- */
        .login-left {
            position: relative;
            background-color: #0d1117;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.04) 1px, transparent 1px);
            background-size: 40px 40px;
            padding: 32px 48px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            width: 100%;
            height: 100vh;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: #22c55e;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .logo-icon svg {
            width: 22px;
            height: 22px;
            color: #fff;
        }

        .logo-text h1 {
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
            margin: 0;
        }

        .logo-text p {
            font-size: 12px;
            color: #64748b;
            margin: 2px 0 0 0;
        }

        .left-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 0;
            max-width: 560px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 4px 12px;
            background: rgba(34, 197, 94, 0.08);
            border: 1px solid rgba(34, 197, 94, 0.25);
            border-radius: 20px;
            margin-bottom: 16px;
            width: fit-content;
        }

        .badge-dot {
            width: 6px;
            height: 6px;
            background: #22c55e;
            border-radius: 50%;
        }

        .badge span {
            font-size: 12px;
            color: #22c55e;
            font-weight: 500;
        }

        .headline {
            font-size: 36px;
            font-weight: 800;
            color: #fff;
            line-height: 1.15;
            margin: 0 0 12px 0;
            letter-spacing: -0.5px;
        }

        .subheadline {
            font-size: 14px;
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .feature-card {
            background: rgba(22, 30, 46, 0.7);
            border: 1px solid #1e2d3d;
            border-radius: 10px;
            padding: 14px 16px;
            transition: border-color 0.2s;
        }

        .feature-card:hover {
            border-color: rgba(34, 197, 94, 0.3);
        }

        .feature-icon {
            width: 32px;
            height: 32px;
            background: rgba(34, 197, 94, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .feature-icon svg {
            width: 18px;
            height: 18px;
            color: #22c55e;
        }

        .feature-card h3 {
            font-size: 13px;
            font-weight: 600;
            color: #e2e8f0;
            margin: 0 0 5px 0;
        }

        .feature-card p {
            font-size: 12px;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .left-footer {
            font-size: 12px;
            color: #475569;
            margin-top: 20px;
        }

        /* ---- Lado Direito ---- */
        .login-right {
            background-color: #000000;
            border-left: 1px solid #1e2d3d;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 60px 40px 60px;
            overflow-y: auto;
            width: 100%;
        }

        .form-box {
            width: 100%;
            max-width: 400px;
            background: #131c2e;
            border: 1px solid #1e2d3d;
            border-radius: 16px;
            padding: 40px 36px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .form-header h2 {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 6px 0;
        }

        .form-header p {
            font-size: 13px;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .field {
            margin-bottom: 18px;
        }

        .field label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: #cbd5e1;
            margin-bottom: 7px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon-left {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            color: #475569;
            pointer-events: none;
        }

        .input-icon-right {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            color: #475569;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-input {
            width: 100%;
            height: 42px;
            padding: 0 40px;
            background: #0d1117;
            border: 1px solid #1e2d3d;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-input::placeholder {
            color: #475569;
        }

        .form-input:focus {
            outline: none;
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.08);
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .checkbox-label input[type="checkbox"] {
            width: 15px;
            height: 15px;
            accent-color: #22c55e;
            cursor: pointer;
            margin: 0;
        }

        .checkbox-label span {
            font-size: 13px;
            color: #94a3b8;
            margin: 0;
        }

        .forgot-link {
            font-size: 13px;
            color: #22c55e;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: #16a34a;
        }

        .submit-btn {
            width: 100%;
            height: 44px;
            background: #22c55e;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            letter-spacing: 0.2px;
        }

        .submit-btn:hover {
            background: #16a34a;
        }

        .submit-btn:active {
            transform: scale(0.99);
        }

        .register-row {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #64748b;
        }

        .register-row a {
            color: #22c55e;
            text-decoration: none;
            font-weight: 600;
        }

        .register-row a:hover {
            text-decoration: underline;
        }

        .field-error {
            font-size: 12px;
            color: #f87171;
            margin-top: 5px;
            display: block;
        }

        @media (max-width: 900px) {
            .login-page {
                grid-template-columns: 1fr;
                position: relative;
                width: 100%;
                height: auto;
            }

            .login-left {
                padding: 32px 24px;
                min-height: 60vh;
            }

            .headline {
                font-size: 32px;
            }

            .login-right {
                border-left: none;
                border-top: 1px solid #1e2d3d;
                padding: 40px 24px;
                min-height: 40vh;
            }
        }
    </style>
</head>

<body>
    <div class="login-page">
        {{-- Lado Esquerdo --}}
        <div class="login-left">
            {{-- Logo --}}
            <div class="logo-wrapper">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.592c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </div>
                <div class="logo-text">
                    <h1>AutoParts Pro</h1>
                    <p>ERP de Desmanche</p>
                </div>
            </div>

            {{-- Conteúdo central --}}
            <div class="left-content">
                <div class="badge">
                    <div class="badge-dot"></div>
                    <span>Sistema Profissional</span>
                </div>

                <h2 class="headline">Gerencie seu desmanche<br>com eficiência profissional</h2>
                <p class="subheadline">Controle total sobre veículos, peças e vendas. Simplifique suas operações e
                    aumente sua lucratividade.</p>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                            </svg>
                        </div>
                        <h3>Gestão de Veículos</h3>
                        <p>Controle completo de entrada e desmanche de veículos</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </div>
                        <h3>Estoque de Peças</h3>
                        <p>Catalogação e rastreamento de todas as peças</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </div>
                        <h3>Relatórios</h3>
                        <p>Análises detalhadas de vendas e estoque</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                        </div>
                        <h3>Conformidade</h3>
                        <p>Documentação em dia com órgãos reguladores</p>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div class="left-footer">
                &copy; 2026 AutoParts Pro. Todos os direitos reservados.
            </div>
        </div>

        {{-- Lado Direito (Formulário) --}}
        <div class="login-right">
            <div class="form-box">
                <div class="form-header">
                    <h2>Bem-vindo de volta</h2>
                    <p>Acesse sua conta para gerenciar seu desmanche</p>
                </div>

                <form wire:submit="authenticate">
                    {{-- Email --}}
                    <div class="field">
                        <label for="email">E-mail</label>
                        <div class="input-wrapper">
                            <svg class="input-icon-left" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6.75L2.25 6.75" />
                            </svg>
                            <input type="email" id="email" wire:model="data.email" class="form-input"
                                placeholder="seu@email.com" autocomplete="email" required>
                        </div>
                        @error('data.email')<span class="field-error">{{ $message }}</span>@enderror
                    </div>

                    {{-- Senha --}}
                    <div class="field">
                        <label for="password">Senha</label>
                        <div class="input-wrapper">
                            <svg class="input-icon-left" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                            <input type="password" id="password" wire:model="data.password" class="form-input"
                                placeholder="••••••••" autocomplete="current-password" required>
                            <button type="button" class="input-icon-right"
                                onclick="const i=document.getElementById('password');i.type=i.type==='password'?'text':'password'">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </div>
                        @error('data.password')<span class="field-error">{{ $message }}</span>@enderror
                    </div>

                    {{-- Lembrar + Esqueceu --}}
                    <div class="form-row">
                        <label class="checkbox-label">
                            <input type="checkbox" wire:model="data.remember">
                            <span>Lembrar de mim</span>
                        </label>
                        <a href="#" class="forgot-link">Esqueceu a senha?</a>
                    </div>

                    {{-- Botão Entrar --}}
                    <button type="submit" class="submit-btn">
                        Entrar
                    </button>
                </form>

                {{-- Link Criar Conta --}}
                @if (filament()->hasRegistration())
                    <div class="register-row">
                        Não tem uma conta? <a href="{{ filament()->getRegistrationUrl() }}">Criar conta</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @filamentScripts
    @livewireScripts
</body>

</html>