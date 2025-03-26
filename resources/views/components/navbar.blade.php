<div class="container-fluid bg-white shadow-sm">
    <header class="d-flex align-items-center p-3 text-white rounded border-bottom">
        <button class="btn btn-outline-secondary d-md-none me-3" id="toggleSidebar">
            ☰
        </button>

        <img src="https://images.unsplash.com/photo-1526313199968-70e399ffe791?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">

        <div>
            <h6 class="mb-0 text-dark">Group Name</h6>
            <small class="text-secondary">Participant</small>
        </div>
    </header>
</div>

<script>
    document.getElementById('toggleSidebar').addEventListener('click', function () {
        var sidebar = document.getElementById('sidebar');
        if (sidebar.classList.contains('d-none')) {
            sidebar.classList.remove('d-none');
            sidebar.classList.add('d-flex');
        } else {
            sidebar.classList.remove('d-flex');
            sidebar.classList.add('d-none');
        }
    });
</script>