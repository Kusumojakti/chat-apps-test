<div id="sidebar" class="d-none d-md-flex flex-column align-items-stretch flex-shrink-0 bg-white border-end vh-100"
    style="width: 350px;">

    <a href="/chat"
        class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom justify-content-lg-start justify-content-sm-between">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" style="margin-right: 4%" width="24"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.98 122.88" xml:space="preserve">
            <g>
                <path
                    d="M17.2,0h59.47c4.73,0,9.03,1.93,12.15,5.05c3.12,3.12,5.05,7.42,5.05,12.15v38.36c0,4.73-1.93,9.03-5.05,12.15 
                    c-3.12,3.12-7.42,5.05-12.15,5.05H46.93L20.81,95.21c-1.21,1.04-3.04,0.9-4.08-0.32c-0.51-0.6-0.74-1.34-0.69-2.07l1.39-20.07
                    H17.2c-4.73,0-9.03-1.93-12.15-5.05C1.93,64.59,0,60.29,0,55.56V17.2c0-4.73,1.93-9.03,5.05-12.15C8.16,1.93,12.46,0,17.2,0L17.2,0z" />
            </g>
        </svg>
        <span class="fs-5 fw-semibold">Chat Apps</span>
        <button class="btn btn-outline-secondary d-md-none m-3" id="closeSidebar">
            ✖
        </button>
    </a>

    <div class="list-group list-group-flush border-bottom scrollarea">
        <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $chatData['results'][0]['room']['name'] }}</strong>
            </div>
        </a>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const toggleSidebar = document.getElementById("toggleSidebar");
        const closeSidebar = document.getElementById("closeSidebar");

        toggleSidebar.addEventListener("click", function () {
            sidebar.classList.remove("d-none"); 
            toggleSidebar.classList.add("d-none"); 
        });

        closeSidebar.addEventListener("click", function () {
            sidebar.classList.add("d-none"); 
            toggleSidebar.classList.remove("d-none"); 
        });
    });
</script>