@include("templates.header")
@include("templates.navbar")
<div class="addwebsite">
    <div class="row ms-lg-3 me-lg-3">
        <div class="col-lg-6">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="createdBy" class="form-label">Created By</label>
                    <input type="text" class="form-control" id="createdBy" placeholder="Input Your Name" required>
                </div>
                <div class="mb-3">
                    <label for="webName" class="form-label">Web Name</label>
                    <input type="text" class="form-control" id="webName" placeholder="Input Web Name" required>
                </div>
                <div class="mb-3">
                    <label for="webUrl" class="form-label">Web Url</label>
                    <input type="text" class="form-control" id="webUrl" placeholder="Input Web URL" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" disabled="disabled" value="online">
                    <button class=" mt-lg-3 btn btn-success">Get Status</button>
                </div>
            </form>
                <button class="btn btn-success"  id="create">Create Web Checker</button>
        </div>
    </div>

</div>
@include("templates.footer")
