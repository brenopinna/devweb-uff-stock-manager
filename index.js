async function deleteProduct(id, product) {
  if (!confirm(`Tem certeza que deseja excluir o produto ${product}?`)) {
    return
  }

  try {
    const response = await fetch("delete.php", {
      method: "POST",
      headers: {
        // esse content-type é necessário para o PHP reconhecer os dados enviados no corpo da requisição
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `id=${id}`,
    })
    if (response.ok) {
      alert("Produto excluído com sucesso!")
      const productsResponse = await fetch("/components/products.php")
      const productsText = await productsResponse.text()
      const container = document.createElement("div")
      container.innerHTML = productsText
      const productsNode = container.firstElementChild
      document.getElementById("products").replaceWith(productsNode)
    } else {
      throw new Error((await response.json()).message)
    }
  } catch (error) {
    alert("Ocorreu um erro ao excluir o produto. Por favor, tente novamente.")
    console.error(error)
  }
}
