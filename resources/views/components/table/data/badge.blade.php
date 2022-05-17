<td class="px-6 py-4 whitespace-nowrap text-sm text-center">
    <x-dynamic-component :component="'badges.' . $value['badge']" :status="$value['status']" />
</td>
