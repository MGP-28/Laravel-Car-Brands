<tr>
    <td class="text-center align-middle">{{$car->id}}</td>
    <td class="text-center align-middle">{{$car->registration}}</td>
    <td class="text-center align-middle">{{$car->brand->name}}</td>
    <td class="text-center align-middle">{{$car->year_of_manufacture}}</td>
    <td class="text-center align-middle">{{$car->color}}</td>
    <td>
        <div class="d-flex align-self-center justify-content-around align-items-center h-100">
            @component('components.car.buttonsRowIndex',['car' => $car])
            @endcomponent
        </div>
    </td>
</tr>
