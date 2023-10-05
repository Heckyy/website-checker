@include("templates.header")
@include("templates.navbar")
<div class="content ms-lg-2">
    <div class="row ">
        <div class="col-lg-12"><h2>Website List</h2></div>
    </div>
    <div class="row mb-lg-5">
        <div class="col-lg-12 ">
            <div class="d-flex justify-content-end me-lg-2">
                <a href="/create-web"> <button class="btn btn-success text-right">Add Website</button></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataArray as $data)
                <tr>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['url']}}</td>
                    @if($data['status'] == "online")
                    <td><img width="15" height="15" src="{{asset('img/online.png')}}" alt=""></td>
                        <td>{{$data['createdBy']}}</td>
                        <td>{{$data['createdAt']}}</td>
                        <td>
                            <button class="btn"><img  width="25" src="{{asset('img/edit.png')}}" alt=""></button>
                            <button class="btn"><img  width="25" src="{{asset('img/delete.png')}}" alt=""></button>
                        </td>
                    @else
                        <td><img width="15" height="15" src="{{asset('img/offline.png')}}" alt=""></td>
                        <td>{{$data['createdBy']}}</td>
                        <td>{{$data['createdAt']}}</td>
                        <td>
                            <button class="btn"><img  width="25" src="{{asset('img/edit.png')}}" alt=""></button>
                            <button class="btn"><img  width="25" src="{{asset('img/delete.png')}}" alt=""></button>
                        </td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include("templates.footer")
