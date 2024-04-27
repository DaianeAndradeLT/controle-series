<x-layout title="Nova série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome da série:</label>
            <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror">
            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
</x-layout>
