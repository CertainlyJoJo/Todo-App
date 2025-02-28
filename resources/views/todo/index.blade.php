<x-layout>

    <div>

        @if ($todos->isEmpty())

            <h1 class="text-center text-2xl mb-6">Your list is empty...</h1>

        @else

            <ul class="mt-5 mb-7 place-self-center w-8/12">
            
                <div class="mx-5 mb-5">
                    {{ $todos->links() }}
                </div>

                @foreach($todos as $todo)
                    <li class="justify-center flex">
                        <div class="text-center card border border-gray-700 w-full">
                            <h3 class="text-2xl underline font-bold">{{ $todo->name }}</h3>
                            <p class="text-lg">{{ $todo->description }}</p>
                        </div>
                        <form class="flex flex-col justify-center ml-2" action="{{ route('todo.delete', $todo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="h-fit"><img class="border border-black bg-white rounded w-10" src="\Icons\delete.svg" alt=""></button>
                        </form>
                    </li>
                @endforeach

            </ul>

        @endif

    </div>

</x-layout>