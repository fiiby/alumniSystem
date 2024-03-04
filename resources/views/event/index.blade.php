<app-x-layout>
    <x-slot name="header">
        Events
    </x-slot>

    <x-slot name="content">
        <h1>All Events</h1>
        <a href="{{ route('events.create') }}">Create New Event</a>

        @if ($events->isEmpty())
        <p>No events found.</p>
        @else
        <ul>
            @foreach ($events as $event)
            <li>
                <a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a>
                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
        @endif
    </x-slot>
</app-x-layout>