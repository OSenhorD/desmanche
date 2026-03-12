<x-filament-panels::page>
    <style>
        /* Layout principal - largura total */
        .fi-page-content{max-width:100%!important;width:100%!important;padding:24px!important}
        .fi-header{margin-bottom:32px!important;padding-top:24px!important;padding-bottom:24px!important;border-bottom:1px solid #334155!important}
        .fi-page-content>div,.fi-page>div,[class*="fi-"]>div{margin:0!important;padding:0!important}
        .fi-page-content{gap:0!important}
        
        /* Base card */
        .card{background:#1e293b;border:1px solid #334155;border-radius:6px;padding:16px}
        .card-dark{background:#0f172a}
        .card-flex{display:flex;flex-direction:column}
        
        /* Grid layouts */
        .grid-metrics{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px}
        .grid-3-1{display:grid;grid-template-columns:3fr 1fr;gap:20px}
        .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
        
        /* Flex utilities */
        .flex{display:flex}.flex-col{flex-direction:column}.flex-between{justify-content:space-between}
        .flex-center{align-items:center}.flex-start{align-items:flex-start}.flex-wrap{flex-wrap:wrap}
        .gap-2{gap:8px}.gap-3{gap:12px}.shrink-0{flex-shrink:0}
        
        /* Typography */
        .text-xs{font-size:10px}.text-sm{font-size:11px}.text-base{font-size:12px}.text-md{font-size:13px}.text-lg{font-size:14px}.text-xl{font-size:20px}
        .font-bold{font-weight:bold}.font-medium{font-weight:500}.font-semibold{font-weight:600}
        .text-white{color:#fff}.text-gray{color:#9ca3af}.text-gray-dark{color:#6b7280}
        .text-green{color:#22c55e}.text-blue{color:#3b82f6}.text-red{color:#ef4444}.text-orange{color:#f97316}
        .text-center{text-align:center}.truncate{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
        
        /* Spacing */
        .m-0{margin:0}.mt-1{margin-top:2px}.mt-2{margin-top:4px}.mb-3{margin-bottom:12px}
        .p-0{padding:0}.p-2{padding:8px}.py-1{padding:4px 0}
        
        /* Icons */
        .icon{width:48px;height:48px;border-radius:6px;display:flex;align-items:center;justify-content:center;margin-left:12px;font-size:20px}
        .icon-sm{width:24px;height:24px;border-radius:50%}
        .icon-xs{width:14px;height:14px}
        .icon-green{background:rgba(34,197,94,0.1);color:#22c55e}
        .icon-blue{background:rgba(59,130,246,0.1);color:#3b82f6}
        .icon-yellow{background:rgba(249,115,22,0.1);color:#f97316}
        .icon-pink{background:rgba(236,72,153,0.1);color:#ec4899}
        .icon-red{background:rgba(239,68,68,0.1);color:#ef4444}
        
        /* Badges */
        .badge{display:inline-flex;align-items:center;gap:6px;font-size:12px;padding:4px 10px;border-radius:999px}
        .badge-green{color:#10b981;background:rgba(16,185,129,0.1)}
        .badge-red{color:#ef4444;background:rgba(239,68,68,0.1)}
        .status-dot{width:6px;height:6px;background:#10b981;border-radius:50%;animation:pulse 2s infinite}
        @keyframes pulse{0%,100%{opacity:1}50%{opacity:0.5}}
        
        /* Logo badges */
        .logo{width:28px;height:28px;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:bold;color:#fff}
        .logo-ml{background:#22c55e}.logo-sh{background:#f97316}.logo-ox{background:#8b5cf6}
        
        /* Charts */
        .donut{width:200px;height:200px}
        .donut-wrapper{display:flex;flex-direction:column;align-items:center;justify-content:space-between;padding-top:8px;flex:1;height:100%}
        .legend{display:flex;flex-wrap:wrap;gap:8px 12px;margin-top:12px;font-size:10px;justify-content:center}
        .legend-dot{width:8px;height:8px;border-radius:2px}
        
        /* Mini chart */
        .mini-chart{display:flex;align-items:flex-end;gap:2px;height:28px;margin-bottom:6px}
        .mini-bar{flex:1;background:#3b82f6;border-radius:2px;min-width:2px}
        
        /* Buttons & Links */
        .btn{display:inline-flex;align-items:center;gap:6px;font-size:12px;color:#9ca3af;background:transparent;border:1px solid #334155;padding:6px 12px;border-radius:4px;cursor:pointer;transition:all 0.2s}
        .btn:hover{background:#334155;color:#fff}
        .btn svg{width:12px;height:12px}
        .link{font-size:11px;color:#3b82f6;text-decoration:none;display:inline-flex;align-items:center;gap:4px;cursor:pointer}
        .link:hover{text-decoration:underline}
        .link svg{width:10px;height:10px}
        
        /* Alerts */
        .alert-item{display:flex;align-items:flex-start;gap:10px;padding:8px;background:#0f172a;border-radius:4px;border-left:2px solid #f59e0b}
        .alert-icon{color:#f59e0b;margin-top:2px}
        .alert-icon svg{width:14px;height:14px}
        .alert-code{font-size:10px;color:#6b7280;background:#1e293b;padding:2px 8px;border-radius:3px;white-space:nowrap}
        
        /* Stats */
        .stats{display:grid;grid-template-columns:repeat(3,1fr);gap:4px;margin-bottom:6px;text-align:center}
        
        /* Responsive */
        @media(max-width:1024px){.grid-3-1{grid-template-columns:1fr}.grid-3{grid-template-columns:1fr}.grid-metrics{grid-template-columns:repeat(2,1fr)}}
        @media(max-width:768px){.grid-metrics{grid-template-columns:1fr}}
    </style>

    <!-- Metricas -->
    <div class="grid-metrics">
        <div class="card flex flex-between flex-center">
            <div><p class="text-sm text-gray m-0">Receita Hoje</p><p class="text-xl font-bold text-white m-0">R$ 4.280</p><p class="text-base text-green m-0">+12% vs ontem</p></div>
            <div class="icon icon-green">$</div>
        </div>
        <div class="card flex flex-between flex-center">
            <div><p class="text-sm text-gray m-0">Pecas Vendidas</p><p class="text-xl font-bold text-white m-0">38</p><p class="text-base text-blue m-0">+5 vs ontem</p></div>
            <div class="icon icon-blue"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/></svg></div>
        </div>
        <div class="card flex flex-between flex-center">
            <div><p class="text-sm text-gray m-0">Itens em Estoque</p><p class="text-xl font-bold text-white m-0">1.847</p><p class="text-base text-red m-0">-3 hoje</p></div>
            <div class="icon icon-yellow"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/></svg></div>
        </div>
        <div class="card flex flex-between flex-center">
            <div><p class="text-sm text-gray m-0">Ticket Medio</p><p class="text-xl font-bold text-white m-0">R$ 112,63</p><p class="text-base text-green m-0">+8% vs semana</p></div>
            <div class="icon icon-pink"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="24" height="24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/></svg></div>
        </div>
    </div>

    <div style="height:20px"></div>

    <!-- Graficos -->
    <div class="grid-3-1">
        <div class="card card-flex">
            <div class="flex flex-between flex-center mb-3">
                <div><div class="text-lg font-semibold text-white">Vendas em Tempo Real</div><div class="text-base text-gray mt-1">Ultimas 24 horas</div></div>
                <div class="badge badge-green"><div class="status-dot"></div>Ao Vivo</div>
            </div>
            @livewire(\App\Filament\Widgets\SalesRevenueChart::class)
        </div>
        <div class="card card-flex">
            <div class="flex flex-between flex-center mb-3">
                <div><div class="text-lg font-semibold text-white">Vendas por Categoria</div><div class="text-base text-gray mt-1">Este mes</div></div>
            </div>
            <div class="donut-wrapper">
                <svg class="donut" viewBox="0 0 200 200">
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#3b82f6" stroke-width="24" stroke-dasharray="140.74 439.82" stroke-dashoffset="0" transform="rotate(-90 100 100)"/>
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#22c55e" stroke-width="24" stroke-dasharray="96.76 439.82" stroke-dashoffset="-140.74" transform="rotate(-90 100 100)"/>
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#f97316" stroke-width="24" stroke-dasharray="79.17 439.82" stroke-dashoffset="-237.50" transform="rotate(-90 100 100)"/>
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#a855f7" stroke-width="24" stroke-dasharray="65.97 439.82" stroke-dashoffset="-316.67" transform="rotate(-90 100 100)"/>
                    <circle cx="100" cy="100" r="70" fill="none" stroke="#6b7280" stroke-width="24" stroke-dasharray="57.18 439.82" stroke-dashoffset="-382.64" transform="rotate(-90 100 100)"/>
                    <circle cx="100" cy="100" r="50" fill="#1e293b"/>
                </svg>
                <div class="legend">
                    <div class="flex flex-center gap-2"><div class="legend-dot" style="background:#3b82f6"></div><span class="text-white">Motor (32%)</span></div>
                    <div class="flex flex-center gap-2"><div class="legend-dot" style="background:#22c55e"></div><span class="text-white">Suspensao (22%)</span></div>
                    <div class="flex flex-center gap-2"><div class="legend-dot" style="background:#f97316"></div><span class="text-white">Freios (18%)</span></div>
                    <div class="flex flex-center gap-2"><div class="legend-dot" style="background:#a855f7"></div><span class="text-white">Eletrica (15%)</span></div>
                </div>
            </div>
        </div>
    </div>

    <div style="height:20px"></div>

    <!-- Marketplaces + Alertas -->
    <div class="grid-3-1">
        <div class="card card-flex gap-2">
            <div class="flex flex-between flex-center">
                <div><div class="text-lg font-semibold text-white">Status dos Marketplaces</div><div class="text-base text-gray mt-1">Sincronizacao em tempo real</div></div>
                <button class="btn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99"/></svg>Sincronizar</button>
            </div>
            <div class="grid-3">
                @foreach([['ML','Mercado Livre','logo-ml',284,12,3,true],['SH','Shopee','logo-sh',156,4,0,true],['OX','OLX','logo-ox',89,0,7,false]] as $mp)
                <div class="card card-dark p-2" @if(!$mp[6]) style="border-color:rgba(239,68,68,0.3);background:rgba(239,68,68,0.05)" @endif>
                    <div class="flex flex-between flex-center" style="margin-bottom:6px">
                        <div class="flex flex-center gap-2"><div class="logo {{$mp[2]}}">{{$mp[0]}}</div><span class="text-md font-medium text-white">{{$mp[1]}}</span></div>
                        <svg class="icon-xs" style="color:{{$mp[6]?'#22c55e':'#ef4444'}}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="stats">
                        <div><span class="text-lg font-bold text-white">{{$mp[3]}}</span><div class="text-xs text-gray">Ativos</div></div>
                        <div><span class="text-lg font-bold text-white">{{$mp[4]}}</span><div class="text-xs text-gray">Sincronizando</div></div>
                        <div><span class="text-lg font-bold {{$mp[5]>0?'text-red':'text-white'}}">{{$mp[5]}}</span><div class="text-xs text-gray">Erros</div></div>
                    </div>
                    <div class="mini-chart">@for($i=0;$i<7;$i++)<div class="mini-bar" style="height:{{rand(40,90)}}%"></div>@endfor</div>
                    <a href="#" class="link">Ver detalhes <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd"/></svg></a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card">
            <div class="flex flex-between flex-center mb-3"><span class="text-lg font-semibold text-white">Alertas de Estoque</span><span class="badge badge-red">4 alertas</span></div>
            <div class="flex flex-col gap-2">
                @foreach([['Motor Omega 2.2 1999','Estoque: 1 (min. 2)','MOS-2019-01'],['Freio Dianteiro Uno 2015','Estoque: 0 (min. 3)','FRT-UNO-15'],['Mola Corsa 2012','Parada ha 45 dias','SUS-COR-12'],['Alternador Gol 2017','Parada ha 38 dias','ALT-GOL-17']] as $alerta)
                <div class="alert-item">
                    <div class="alert-icon shrink-0"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z"/></svg></div>
                    <div style="flex:1;min-width:0"><div class="text-base font-medium text-white truncate">{{$alerta[0]}}</div><div class="text-sm text-gray mt-1">{{$alerta[1]}}</div></div>
                    <span class="alert-code">{{$alerta[2]}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div style="height:20px"></div>

    <!-- Feed -->
    <div style="background:#1e293b;border:1px solid #334155;border-radius:6px;padding:24px;">
        <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:20px;padding:0 16px 12px 16px;border-bottom:1px solid #334155;">
            <div><div style="font-size:14px;font-weight:600;color:#fff;">Feed de Atividades</div><div style="font-size:12px;color:#6b7280;margin-top:6px;">Ultimas acoes do sistema</div></div>
        </div>
        <div style="display:flex;flex-direction:column;gap:0;">
            @foreach([['success','Motor Gol 1.0 2020 publicado no Mercado Livre','2 min atras'],['info','Preco do Radiador Civic 2018 atualizado para R$ 340,00','16 min atras'],['sync','Sincronizacao com Shopee concluida (156 itens)','32 min atras'],['error','Falha na publicacao: Alternador Corsa (OLX)','1h atras'],['success','Bomba D\'agua Palio 2015 publicada em 2 canais','1h 20min atras'],['sync','Sincronizacao com Mercado Livre concluida (284 itens)','2h atras']] as $act)
            <div style="display:flex;align-items:flex-start;gap:12px;padding:12px 16px;border-bottom:1px solid #334155;">
                <div style="width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;{{$act[0]=='success'?'background:rgba(34,197,94,0.1);color:#22c55e':($act[0]=='error'?'background:rgba(239,68,68,0.1);color:#ef4444':'background:rgba(59,130,246,0.1);color:#3b82f6')}}">
                    @if($act[0]=='success')<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="12" height="12"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"/></svg>
                    @elseif($act[0]=='error')<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="12" height="12"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-1.72 6.97a.75.75 0 1 0-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 1 0 1.06 1.06L12 13.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L13.06 12l1.72-1.72a.75.75 0 1 0-1.06-1.06L12 10.94l-1.72-1.72Z" clip-rule="evenodd"/></svg>
                    @else<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="12" height="12"><path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd"/></svg>
                    @endif
                </div>
                <div style="flex:1;min-width:0;"><span style="font-size:13px;font-weight:500;color:#fff;">{{$act[1]}}</span></div>
                <span style="font-size:11px;color:#9ca3af;flex-shrink:0;white-space:nowrap;">{{$act[2]}}</span>
            </div>
            @endforeach
        </div>
    </div>

    <div style="height:32px;"></div>
</x-filament-panels::page>