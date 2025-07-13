{{-- File: resources/views/livewire/home-page.blade.php --}}
<div class="p-4">
    <h2 class="text-2xl font-bold mb-4">Recent Posts</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        {{-- You will loop through your actual posts here later --}}
        <div class="bg-white rounded-lg shadow-md">
            <img src="https://via.placeholder.com/400x250" alt="Post Image" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-bold">Post Title 1</h3>
            </div>
        </div>
         <div class="bg-white rounded-lg shadow-md">
            <img src="https://via.placeholder.com/400x250" alt="Post Image" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-bold">Post Title 2</h3>
            </div>
        </div>
         <div class="bg-white rounded-lg shadow-md">
            <img src="https://via.placeholder.com/400x250" alt="Post Image" class="rounded-t-lg">
            <div class="p-4">
                <h3 class="text-xl font-bold">Post Title 3</h3>
            </div>
        </div>
    </div>
</div>