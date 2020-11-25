<td {{ ($colspan != '') ? 'colspan = '.$colspan : '' }} {{ $attributes->merge(['class' => 'px-1 py-4 whitespace-no-wrap text-sm leading-5']) }}>
    {{ $slot }}
</td>