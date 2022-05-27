<tr>
    <td class="text-center align-middle">{{$brand->id}}</td>
    <td class="text-center align-middle">{{$brand->name}}</td>
    <td class="text-center align-middle">
        @if($brand->cars->count() == 0)
            <span>No registered vehicles</span>
        @endif
        @foreach($brand->cars as $car)
            <span>{{$car->registration}}</span><br>
        @endforeach
    </td>
    <td>
        <div class="d-flex align-self-center justify-content-around align-items-center h-100">
            @component('components.brand.buttonsRowIndex',['brand' => $brand])
            @endcomponent
        </div>
    </td>
</tr>
