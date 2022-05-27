<tr>
    <td class="text-center align-middle">{{$player->id}}</td>
    <td class="text-center align-middle">{{$player->name}}</td>
    <td class="text-center align-middle">{{$player->address}}</td>
    <td class="text-center align-middle">
        @if($player->retired) <i class="bi bi-check-circle text-success h2"></i>
        @else <i class="bi bi-x-circle text-danger h2"></i>
        @endif
    </td>
    <td>
        <div class="d-flex justify-content-around">
            @component('components.player.buttonsRowIndex',['brand' => $player])
            @endcomponent
        </div>
    </td>
</tr>
