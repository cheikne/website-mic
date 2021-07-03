<h1>Les clients de mon entreprise</h1>
<ul>
    @foreach($client as $data)
    <li>{{$data->name}}</li>
    @endforeach;
</ul>