<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('components.css')
    <!-- Include CSS and JS libraries here -->
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
</head>
<body>
<div class="container-scroller">
    @include('components.header')
    <div class="container-fluid page-body-wrapper">
        @include('components.floatSetting')
        @include('components.rightSidebar')
        @include('components.sidebar')
        <div class="container">
        @if(session('success'))
<script>
    Toastify({
        text: "{{ session('success') }}",
        duration: 3000, 
        gravity: "top", 
        position: "center", 
        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", 
        stopOnFocus: true, 
    }).showToast();
</script>
@endif
            <div class="card-body">
                <h4 class="card-title mb-0">Assets > All List</h4>
                <button type="button" class="btn btn-primary mb-4 mt-4" data-toggle="modal" data-target="#addAssetModal">
                    Add Asset
                </button>
                <div class="table-responsive">
    <table id="assetsTable" class="table table-striped table-hover table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Price</th>
                <th>Purchase Date</th>
                <th>Warranty End Date</th>
                <th>Brand Name</th>
                <th>Location ID</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse ($assets as $asset)
                <tr>
                    <td>{{ $asset->id }}</td>
                    <td>
                        @if ($asset->picture)
                            <img src="{{ asset('storage/' . $asset->picture) }}" alt="Asset Image" style="width: 100px; height: auto;" class="img-thumbnail">
                        @else
                            <span class="text-muted">No Image</span>
                        @endif
                    </td>
                    <td>{{ $asset->name }}</td>
                    <td class="font-weight-bold">{{ number_format($asset->price, 2) }}</td>
                    <td>{{ \Carbon\Carbon::parse($asset->purchase_date)->format('d M, Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($asset->warranty_end_date)->format('d M, Y') }}</td>
                    <td>{{ $asset->brand_id }}</td>
                    <td>{{ $asset->location_id }}</td>
                    <td class="font-weight-medium">
                        <div class="badge badge-{{ $asset->status == 'Active' ? 'success' : ($asset->status == 'Under Maintenance' ? 'warning' : 'danger') }}">
                            {{ $asset->status }}
                        </div>
                    </td>
                    <td>{{ $asset->created_at ? $asset->created_at->format('d M, Y H:i:s') : 'No Details Found' }}</td>
                    <td>{{ $asset->updated_at ? $asset->updated_at->format('d M, Y H:i:s') : 'No Details Found' }}</td>
                    <td>
                        <!-- Edit Button -->
                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editAssetModal{{ $asset->id }}">
                            <i class="fa fa-edit"></i>
                        </button>

                        <!-- Delete Button -->
                        <form action="{{ route('asset.destroy', $asset->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this asset?');">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center text-muted">No Data Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-3">
        {{ $assets->links('pagination::bootstrap-4') }}
    </div>
</div>


            </div>
        </div>

        <!-- Modal -->
       <!-- resources/views/assets/create.blade.php -->

<div class="modal fade" id="addAssetModal" tabindex="-1" role="dialog" aria-labelledby="addAssetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAssetModalLabel">Add Asset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Asset Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="purchase_date">Purchase Date</label>
                        <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                    </div>
                    <div class="form-group">
                        <label for="warranty_end_date">Warranty End Date</label>
                        <input type="date" class="form-control" id="warranty_end_date" name="warranty_end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Pending">Active</option>
                            <option value="Completed">Under Maintenance</option>
                            <option value="Cancelled">dead</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand_id">Brand</label>
                        <select class="form-control" id="brand_id" name="brand_id" required>
    @foreach($brands as $brand)
        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
    @endforeach
</select>
                    </div>
                    <div class="form-group">
                        <label for="type_id">Type</label>
                       
<select class="form-control" id="type_id" name="type_id" required>
    @foreach($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
    @endforeach
</select>

                    </div>
                    <div class="form-group">
                        <label for="location_id">Location</label>
                       
<select class="form-control" id="location_id" name="location_id" required>
    @foreach($locations as $location)
        <option value="{{ $location->id }}">{{ $location->location_name }}</option>
    @endforeach
</select>


                    </div>



                    








                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </div>
    @include('components.javaScript')
    <!-- Include JS libraries here -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- DataTables Buttons JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <!-- PDFMake (required for PDF export) -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#assetsTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>
</html>
