<div>
    <x-flash-message/>
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">
                    New Post
                </h5>
                <form wire:submit="save" >
                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input wire:model="form.title" class="form-control" placeholder="let's start" id="title" rows="3"/>
                        @error('form.title')
                        <small class="text-danger place d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="body" class="form-label">Body</label>
                        <textarea wire:model="form.body" class="form-control" placeholder="What's on Your mind?" id="body" rows="3"></textarea>
                        @error('form.body')
                        <small class="text-danger d-block mt-1">{{ $message }}</small>
                        @enderror
                    </div>
                    <button class="btn btn-primary">save</button>
                </form>
            </div>
        </div>
    </div>

</div>
