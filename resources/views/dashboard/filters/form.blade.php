@php
    $isUpdate = isset($filter);
@endphp

<form method="POST" action="{{ $isUpdate ? route('filters.update', $filter) : route('filters.store', $filter) }}" enctype="multipart/form-data">
    @csrf

    @if($isUpdate) @method('PATCH') @endif

    <label for="name">Nom</label>
    <div class="input-group">
        <input type="text" name="name" value="{{ old('name') ?? $filter->name }}">
    </div>

    <label for="">Options</label>
    <div id="options-container">
    </div>
    <button id="btn-add-option" type="button" class="btn btn-primary">Ajouter une option</button>

    <button type="submit">Enregistrer</button>
</form>

@push('scripts')
    <script>
        const btnAddOption = document.querySelector('#btn-add-option');
        const optionsContainer = document.querySelector('#options-container');

        const options = @json($filter->options);

        function deleteInput() {

        }

        function addInput(option = null) {
            const inputHtml = `
                <div class="input-group">
                    <input type="text" name="options[]" value="${option.label}">
                    <button class="btn btn-danger" onclick="deleteInput()">Supprimer</button>
                </div>
            `;
            optionsContainer.insertAdjacentHTML('afterbegin', inputHtml);
        }

        btnAddOption.addEventListener('click', () => {
            addInput();
        });

        options.forEach(option => {
            addInput(option);
        });
    </script>
@endpush
