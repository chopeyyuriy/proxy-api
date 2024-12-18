<div class="validation_messages">
    @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
</div>

<style>
    .validation_messages {
        margin: 15px 0;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }

    .validation_messages .alert {
        font-weight: bold;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .alert-success {
        border-left: 5px solid #28a745;
    }

    .alert-danger {
        border-left: 5px solid #dc3545;
    }

    .alert-success::before {
        content: '✔';
        margin-right: 10px;
    }
</style>
