@extends('admin.layouts.main')

@section('main-container')
    {{-- <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Post</h4>
                <hr>
                <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/store-ad') }}">
                    @csrf

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="vehicle_name">Vehicle Name</label>
                        <input type="text" name="vehicle_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" name="weight" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="5" cols="30" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categories">Categories</label>
                        <input type="text" name="categories" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for="contact">Contact No</label>
                        <input type="tel" name="contact" class="form-control" placeholder="123-456-7890" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control">

                    </div>

                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div> --}}

       
        
            <title>Service Form with Category Selection</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                    padding: 20px;
                }
                .form-container {
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    padding: 20px;
                    display: none; /* Hidden by default */
                }
            </style>
        </head>
        <body>
        
        <div class="container">
            <h2 class="mb-4">Service Provider Form</h2>
        
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="categoryTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="agriculture-vehicle-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="agriculture-vehicle" aria-selected="false" onclick="showForm('agriculture-vehicle')">Agriculture Vehicle</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="agriculture-machinery-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="agriculture-machinery" aria-selected="false" onclick="showForm('agriculture-machinery')">Agriculture Machinery</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="loading-vehicle-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="loading-vehicle" aria-selected="false" onclick="showForm('loading-vehicle')">Loading Vehicle</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="labour-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="labour" aria-selected="false" onclick="showForm('labour')">Labour</button>
                </li>
            </ul>
        
            <!-- Form Content -->
            <div id="formContainer" class="form-container mt-3">
                <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/store-ad') }}">
                    @csrf
                    <!-- Common Fields (shown when a category is selected) -->
                    <div class="mb-3">
                        <label for="serviceName" class="form-label">Service Name:</label>
                        <input type="text" class="form-control" id="serviceName" name="serviceName" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="location">Location</label>
                        <input type="text" name="location" class="form-control" id="location">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration">Duration</label>
                        <input type="text" name="duration" class="form-control" id="duration">
                    </div>
                    <div class="mb-3">
                        <label for="contact">Contact No</label>
                        <input type="tel" name="contact" id="contact" class="form-control" placeholder="123-456-7890" required>
                    </div>
                   
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
        
                    <!-- Category-Specific Fields (shown based on selected category) -->
                    <div id="categoryFields"></div>
        
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
        
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
            // JavaScript function to show form based on category selection
            function showForm(category) {
                // Show form container
                document.getElementById('formContainer').style.display = 'block';
        
                // Get category-specific fields container
                const categoryFields = document.getElementById('categoryFields');
        
                // Clear any previously shown category-specific fields
                categoryFields.innerHTML = '';
        
                // Load specific fields based on the selected category
                if (category === 'agriculture-vehicle') {
                    categoryFields.innerHTML = `
                        <div class="mb-3">

                            <input type="hidden" class="form-control" id="vehicleType" name="type" value="agriculture-vehicle" >
                        </div>
                        <div class="mb-3">
                            <label for="fuelType" class="form-label">Fuel Type:</label>
                            <input type="text" class="form-control" id="fuelType" name="fuelType" required>
                        </div>
                        <div class="mb-3">
                            <label for="modelYear" class="form-label">Model/Year:</label>
                            <input type="text" class="form-control" id="modelYear" name="modelYear" required>
                        </div>
                    `;
                } else if (category === 'agriculture-machinery') {
                    categoryFields.innerHTML = `
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="machineryType" name="type" value="agriculture-machinery">
                        </div>
                        <div class="mb-3">
                            <label for="powerSource" class="form-label">Power Source:</label>
                            <input type="text" class="form-control" id="powerSource" name="powerSource">
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label">Capacity:</label>
                            <input type="text" class="form-control" id="capacity" name="capacity">
                        </div>
                    `;
                } else if (category === 'loading-vehicle') {
                    categoryFields.innerHTML = `
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="loadCapacity" name="type" value="loading-vehicle">
                        </div>
                        <div class="mb-3">
                            <label for="goodsSupported" class="form-label">Type of Goods Supported:</label>
                            <input type="text" class="form-control" id="goodsSupported" name="goodsSupported">
                        </div>
                        <div class="mb-3">
                            <label for="specialFeatures" class="form-label">Special Features:</label>
                            <input type="text" class="form-control" id="specialFeatures" name="specialFeatures">
                        </div>
                    `;
                } else if (category === 'labour') {
                    categoryFields.innerHTML = `
                        <div class="mb-3">
                            <input type="hidden" class="form-control" id="labourType" name="type" value="labour">
                        </div>
                        <div class="mb-3">
                            <label for="workersAvailable" class="form-label">Number of Workers Available:</label>
                            <input type="number" class="form-control" id="workersAvailable" name="workersAvailable" required>
                        </div>
                        <div class="mb-3">
                            <label for="experienceSkills" class="form-label">Experience/Skills:</label>
                            <input type="text" class="form-control" id="experienceSkills" name="experienceSkills">
                        </div>
                        
                    `;
                }
            }
        </script>
        
        </body>
        </html>
        






















    @endsection
