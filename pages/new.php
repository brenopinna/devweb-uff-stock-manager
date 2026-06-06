<div class="container gy-4">
  <form id="create-product">
    <div class="row g-0 gap-4">
      <div class="col">
        <label for="name" class="form-label">Nome</label>
        <input
          type="text"
          class="form-control bg-secondary"
          id="name"
          name="name"
          required />
      </div>
      <div class="col">
        <label for="quantity" class="form-label">Quantidade</label>
        <input
          type="number"
          step="1"
          min="1"
          class="form-control bg-secondary"
          id="quantity"
          name="quantity"
          value="1"
          required />
      </div>
      <div class="col">
        <label for="price" class="form-label">Preço</label>
        <input
          type="number"
          step="0.01"
          min="0.01"
          class="form-control bg-secondary"
          id="price"
          name="price"
          value="0.01"
          required />
      </div>
      <div class="col">
        <label for="category" class="form-label">Categoria</label>
        <input
          type="text"
          class="form-control bg-secondary"
          id="category"
          name="category"
          required />
      </div>
    </div>
    <div class="row g-0 mt-4">
      <div class="col">
        <label for="description" class="form-label">Descrição</label>
        <textarea
          class="form-control bg-secondary resize-none"
          style="height: 120px; resize: none"
          id="description"
          name="description"
          required></textarea
        >
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Salvar</button>
  </form>
</div>
