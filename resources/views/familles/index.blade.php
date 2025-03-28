@extends('adminLayout.app')
@section('title', 'Famillies')
@section('mini title', 'Famillies')
@section('adminContent')
<div class="w-full flex flex-col">

    <a href="{{route('familles.create')}}" class="self-end">
        <button type="button" class="bg-cyan-600 hover:bg-cyan-500 cursor-pointer text-white font-bold py-2 px-4 rounded">Ajouter un Famille</button>
    </a>

    <table class="w-full text-center mt-4 h-10 overflow-y-auto">
        <thead>
            <tr>
                <th class="bg-gray-200 py-2 rounded-tl-2xl">Libelle</th>
                <th class="bg-gray-200 py-2">Image</th>
                <th class="bg-gray-200 py-2 rounded-tr-2xl">Action</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            @forelse($familles as $famille)
            <tr class="hover:bg-slate-200">
                <td class="py-4 {{$loop->last?'rounded-bl-2xl':''}}">{{ $famille->libelle }}</td>
                <td class="flex items-center justify-center h-full">
                    <img src="{{ asset($famille->image) }}" alt="{{ $famille->libelle }}" class="h-15 rounded-xl">
                </td>
                <td class="py-4 px-2 {{$loop->last?'rounded-br-2xl':''}}">
                    <form action="{{route('familles.destroy',$famille)}}" method="post" class="flex gap-2 items-center justify-center">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('familles.edit',$famille)}}">
                            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="bg-yellow-500 hover:bg-yellow-400 cursor-pointer pl-2 pb-1.5 pt-1 pr-1 rounded-xl hover:scale-90 transition-all duration-200">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z" fill="#f6f3f4" />
                            </svg>
                        </a>
                        <button type="submit">
                            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="bg-red-600 hover:bg-red-500 cursor-pointer p-2 rounded-xl hover:scale-90 transition-all duration-200">
                                <path d="M10 11V17" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14 11V17" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4 7H20" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#f6f3f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='3' class='rounded-b-2xl p-2 font-bold'>pas des Familles</td>
            </tr>
            @endforelse
    </table>
</div>



@endsection