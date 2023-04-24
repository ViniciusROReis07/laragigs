<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 p-10 rounded'])}} >
    {{--  diretiva Blade que permite que você defina uma área em um layout que possa ser preenchida por conteúdo de exibição de outras visualizações   --}}
    {{-- precisamos utilizar $attributes->merge(['class' => '']) para conseguir adicionar classes a componente na tela onde esta sendo chamada --}}
    {{$slot}}
</div>