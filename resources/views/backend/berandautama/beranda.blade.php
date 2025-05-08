<x-layoutAdmin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1 class="fw-bold">{{ $title }}</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

        <div class="card-container">
        
        </div>

        <style>
        /* Container untuk banyak card dengan CSS Grid */
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px; /* Jarak antar card */
            padding: 20px;
        }
        </style>



    </main>
</x-layoutAdmin>
