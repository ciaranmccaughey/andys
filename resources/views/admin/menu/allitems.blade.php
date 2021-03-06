@foreach ($sections as $section)

<h2>{{ $section->name }}</h2>
<table class="table table-striped">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Featured</th>
        <th>GF</th>
        <th>VEG</th>
        <th>EDIT</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>
    @foreach ($items as $item)
        @if($item->section_id === $section->id)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }} </td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->featured }}</td>
                <td>{{ $item->gf }}</td>
                <td>{{ $item->veg }}</td>
                <td><a href="/admin/editItem/{{$item->id}}" class="button">Edit</a></td>
                <td><a href="/admin/delete/{{$item->id}}" class="button" onclick="comfirmDelete();">DELETE</a></td>
            </tr>
        @endif
    @endforeach
    <!--<button type="button" ><a href="/admin/editItem/{{$item->id}}">Edit</a></button>-->
</tbody>
</table>

@endforeach

<script>
public function comfirmDelete(){
    if (confirm("Click OK to continue?")){
         $('form#delete').submit();
      }
}

});
</script>
