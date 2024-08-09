
<!-- Toastify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<!-- Toastify JS -->
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
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

                        <h3 class="font-weight-bold">
                            Welcome
                            @if (Auth::user())
                            {{Auth::user()->name }}
                            <!-- Add more user information as needed -->
                            @else
                            <p>Access denied. Please <a href="{{ route('login')  }}">login</a> to view
                                this page.</p>
                            @endif
                        </h3>

                        <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">
                                        <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                            <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                                <a class="dropdown-item" href="#">January - March</a>
                                                <a class="dropdown-item" href="#">March - June</a>
                                                <a class="dropdown-item" href="#">June - August</a>
                                                <a class="dropdown-item" href="#">August - November</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                </div>
            </div>
        </div>
        <div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card bg-warning text-dark" title="Click to know About All Asset">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-cogs fa-2x mb-3 me-3"></i>
                        <p class="mb-4 font-weight-bold fs-5">Total Assets</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-30 mb-2">4006</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card bg-primary text-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-tools fa-2x mb-3 me-3"></i>
                        <p class="mb-4 font-weight-bold fs-5">Total Components</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-30 mb-2">61344</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card bg-success text-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-wrench fa-2x mb-3 me-3"></i>
                        <p class="mb-4 font-weight-bold fs-5">Total Maintenance</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-30 mb-2">340</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
            <div class="card bg-danger text-dark">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-users fa-2x mb-3 me-3"></i>
                        <p class="mb-4 font-weight-bold fs-5">Total Employees</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="fs-30 mb-2">120</p>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Ordered Assets Report</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Asset</th>
                                        <th>Price</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Laptop Dell XPS 13</td>
                                        <td class="font-weight-bold">1,20098</td>
                                        <td>10 Jul 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Office Chair</td>
                                        <td class="font-weight-bold">54300</td>
                                        <td>15 Jun 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Received</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Printer HP LaserJet</td>
                                        <td class="font-weight-bold">12450</td>
                                        <td>22 Jul 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Projector Epson</td>
                                        <td class="font-weight-bold">13800</td>
                                        <td>18 Jun 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Received</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Desk Phone Cisco</td>
                                        <td class="font-weight-bold">45120</td>
                                        <td>30 Jul 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Desktop Monitor 27"</td>
                                        <td class="font-weight-bold">13350</td>
                                        <td>12 Aug 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-warning">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>External Hard Drive</td>
                                        <td class="font-weight-bold">34150</td>
                                        <td>05 Aug 2024</td>
                                        <td class="font-weight-medium">
                                            <div class="badge badge-success">Received</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">To Do Lists</h4>

            <!-- Display Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Display To-Do List -->
            @if($tasks->isEmpty()) 
                <p>No to-do list available.</p>
            @else
                <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        @foreach($tasks as $task)
                            <li class="{{ $task->completed ? 'completed' : '' }}">
                                <!-- Update Task Status -->
                                <form action="{{ route('todolist.update', $task->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="completed" 
                                            {{ $task->completed ? 'checked' : '' }} 
                                            onchange="this.form.submit()">
                                            {{ $task->task }}
                                        </label>
                                    </div>
                                </form>

                                <!-- Delete Task -->
                                <form action="{{ route('todolist.destroy', $task->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link remove ti-close">X</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Add New Task -->
            <div class="add-items d-flex mb-0 mt-2">
                <form action="{{ route('todolist.store') }}" method="POST" class="d-flex w-100">
                    @csrf
                    <input type="text" class="form-control todo-list-input" name="task" placeholder="Add new task">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>




            
            <!-- <div class="col-md-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">To Do Lists</h4>
            @if($tasks->isEmpty()) 
                <p>No to-do list available.</p>
            @else
                <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        @foreach($tasks as $task)
                            <li class="{{ $task->completed ? 'completed' : '' }}">
                                <form action="{{ route('todolist.update', $task->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-check form-check-flat">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="checkbox" name="completed" 
                                            {{ $task->completed ? 'checked' : '' }} 
                                            onchange="this.form.submit()">
                                            {{ $task->task }}
                                        </label>
                                    </div>
                                </form>
                                <form action="{{ route('todolist.destroy', $task->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link remove ti-close"></button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="add-items d-flex mb-0 mt-2">
            <form action="{{ route('todolist.store') }}" method="POST" class="d-flex w-100">
    @csrf
    <input type="text" class="form-control todo-list-input" name="task" placeholder="Add new task">
    <button type="submit" class="add btn btn-icon text-primary todo-list-add-btn bg-transparent">
        <i class="icon-circle-plus"></i>
    </button>
</form>

            </div>
        </div>
    </div>
</div> -->


        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Asset Details</p>
                        <p class="font-weight-500">Overview of asset status and key metrics within the selected date range. It provides insights on asset utilization, condition, and other relevant data.</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Total Assets</p>
                                <h3 class="text-primary fs-30 font-weight-medium">4k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Active Assets</p>
                                <h3 class="text-primary fs-30 font-weight-medium">950</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Maintenance Due</p>
                                <h3 class="text-primary fs-30 font-weight-medium">120</h3>
                            </div>
                            <div class="mt-3">
                                <p class="text-muted">Total Value</p>
                                <h3 class="text-primary fs-30 font-weight-medium">3.4M</h3>
                            </div>
                        </div>
                        <canvas id="asset-chart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Account's Report</p>
                            <a href="#" class="text-info">View all</a>
                        </div>
                        <p class="font-weight-500">The total number of sessions within the date range. It is
                            the period time a user is actively engaged with your website, page or app, etc
                        </p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
      

        <div class="row">
            <!-- Ticket Report Section -->
            <div class="col-md-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Ticket Report</p>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="pl-0 pb-2 border-bottom">Item</th>
                                        <th class="border-bottom pb-2">Tickets Raised</th>
                                        <th class="border-bottom pb-2">Days Unresolved</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pl-0">Laptop</td>
                                        <td>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">5</span></p>
                                        </td>
                                        <td class="text-muted">3</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0">Monitor</td>
                                        <td>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">2</span></p>
                                        </td>
                                        <td class="text-muted">7</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0">Printer</td>
                                        <td>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">1</span></p>
                                        </td>
                                        <td class="text-muted">2</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0">Phone</td>
                                        <td>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">3</span></p>
                                        </td>
                                        <td class="text-muted">5</td>
                                    </tr>
                                    <tr>
                                        <td class="pl-0">Keyboard</td>
                                        <td>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">4</span></p>
                                        </td>
                                        <td class="text-muted">1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Content Sections -->
            <div class="col-md-6 stretch-card grid-margin">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">detailed analysis</p>
                                <div class="charts-data">
                                    <div class="mt-3">
                                        <p class="mb-0">Data 1</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress progress-md flex-grow-1 mr-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">5k</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-0">Data 2</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress progress-md flex-grow-1 mr-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">1k</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-0">Data 3</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress progress-md flex-grow-1 mr-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">992</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="mb-0">Data 4</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress progress-md flex-grow-1 mr-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">687</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
                        <div class="card data-icon-card-primary">
                            <div class="card-body">
                                <p class="card-title text-white">Number of Meetings</p>
                                <div class="row">
                                    <div class="col-8 text-white">
                                        <h3>34040</h3>
                                        <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range. It is calculated as the sum.</p>
                                    </div>
                                    <div class="col-4 background-icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                            <div class="ml-xl-4 mt-3">
                                                <p class="card-title">Detailed Reports</p>
                                                <h1 class="text-primary">34040</h1>
                                                <h3 class="font-weight-500 mb-xl-4 text-primary">North
                                                    America</h3>
                                                <p class="mb-2 mb-xl-0">The total number of sessions within
                                                    the date range. It is the period time a user is actively
                                                    engaged with your website, page or app, etc</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-9">
                                            <div class="row">
                                                <div class="col-md-6 border-right">
                                                    <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                        <table class="table table-borderless report-table">
                                                            <tr>
                                                                <td class="text-muted">Illinois</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">713
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Washington</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">583
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Mississippi</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">924
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">California</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">664
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Maryland</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">560
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Alaska</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">793
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <canvas id="north-america-chart"></canvas>
                                                    <div id="north-america-legend"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                            <div class="ml-xl-4 mt-3">
                                                <p class="card-title">Detailed Reports</p>
                                                <h1 class="text-primary">$34040</h1>
                                                <h3 class="font-weight-500 mb-xl-4 text-primary">North
                                                    America</h3>
                                                <p class="mb-2 mb-xl-0">The total number of sessions within
                                                    the date range. It is the period time a user is actively
                                                    engaged with your website, page or app, etc</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-9">
                                            <div class="row">
                                                <div class="col-md-6 border-right">
                                                    <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                        <table class="table table-borderless report-table">
                                                            <tr>
                                                                <td class="text-muted">Illinois</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">713
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Washington</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">583
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Mississippi</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">924
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">California</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">664
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Maryland</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">560
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Alaska</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">793
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <canvas id="south-america-chart"></canvas>
                                                    <div id="south-america-legend"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Advanced Table</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="example" class="display expandable-table" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Quote#</th>
                                                            <th>Product</th>
                                                            <th>Business type</th>
                                                            <th>Policy holder</th>
                                                            <th>Premium</th>
                                                            <th>Status</th>
                                                            <th>Updated at</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div> -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-center">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024.
                <a href="https://www.okcl.org">Odisha Knowledge Corporation Limited</a> All rights reserved.</span>

        </div>

    </footer>
    <!-- partial -->
     <script>
        setTimeout(function() {
    let alert = document.querySelector('.alert');
    if (alert) {
        alert.classList.remove('show');
        alert.classList.add('fade');
    }
}, 3000); // The alert will disappear after 3 seconds

     </script>
</div>