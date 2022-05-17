<div>
    <div>
        THIS IS AN EXAMPLE
    </div>
    @php print('$a = '); var_dump($a) @endphp
    <x-backstate::input-menu.checkbox hasSearch itemsName="sets" wire:model="c" :items="[['k'=>1, 'v'=>1], ['k'=>'key_2', 'v'=>'2847382647836247636347539857483975843759834758934787648736873']]" key="k" label="v" />
    <x-backstate::input-menu.select wire:model="a" :items="[['k'=>'key_1', 'v'=>1], ['k'=>'key_2', 'v'=>2]]" key="k" label="v" />
    <x-backstate::searchbar wire:model="b" placeholder="Search..."/>
</div>
