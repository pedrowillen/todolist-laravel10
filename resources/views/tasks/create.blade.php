<x-layout page="Create" btn="Voltar" href="{{route('home')}}">
    <section id="create-task-section">
        <h1>Criar tarefa</h1>
        <form action="">
            <div class="input-area">
                <label for="title">
                    Titulo da task
                </label>
                <input type="text" required placeholder="Digite o título da tarefa"/>
            </div>
            <div class="input-area">
                <label for="title">
                    Data de Realizacão
                </label>
                <input type="date" required />
            </div>
            <div class="input-area">
                <label for="title">
                    Descricão
                </label>
                <textarea name="" placeholder="Digite uma descricão para a sua tarefa"cols="30" rows="10"></textarea>
            </div>
            <div class="input-area">
                <label for="title">
                    Categoria
                </label>
                <select>
                    <option  selected disable value="">Selecione a categoria</option>
                </select>
            </div>
        </form>
    </section>
</x-layout>
