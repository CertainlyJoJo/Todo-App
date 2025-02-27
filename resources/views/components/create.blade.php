<div x-show="showForm" x-transition class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-5 rounded-lg shadow-lg w-96 relative" @click.away = "showForm = false">
        <div class="flex justify-between">
            <h2 class="text-xl font-bold">Create a To-Do</h2>
            <button @click="showForm = false" class="text-2xl border border-black rounded-full w-8 h-8 flex justify-center items-center">x</button>
        </div>

        <form action="{{ route('todo.create') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-medium">Title</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label for="description" class="block font-medium">Description</label>
                <textarea id="description" name="description" rows="3" required class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Add To-Do
            </button>

            @if($errors->any())
                <ul class="px-4 py-2 bg-red-100">
                    @foreach($errors->all() as $error)
                        <li class="my-2 text-red-500">- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </form>

    </div>
</div>