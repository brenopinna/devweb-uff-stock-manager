async function deleteProduct(id, product) {
  if (!confirm(`Tem certeza que deseja excluir o produto ${product}?`)) {
    return
  }

  try {
    const response = await fetch("data/delete.php", {
      method: "POST",
      headers: {
        // esse content-type é necessário para o PHP reconhecer os dados enviados no corpo da requisição
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `id=${id}`,
    })
    if (response.ok) {
      alert("Produto excluído com sucesso!")
      const productsResponse = await fetch("/pages/home.php")
      const productsText = await productsResponse.text()
      document.getElementById("main-container").innerHTML = productsText
    } else {
      throw new Error((await response.json()).message)
    }
  } catch (error) {
    alert("Ocorreu um erro ao excluir o produto. Por favor, tente novamente.")
    console.error(error)
  }
}

async function createProduct(e) {
  e.preventDefault()

  const formData = new FormData(e.target)

  try {
    const response = await fetch("/data/create.php", {
      method: "POST",
      // removi o content-type multipart/form-data pq o navegador por padrao coloca umas
      // informacoes no header de content-type mas se eu escrevo manualmente nao funciona.
      // entao, quando for formData, eh so enviar sem nada no header que funciona.
      body: formData,
    })
    if (response.ok) {
      alert("Produto criado com sucesso!")
      e.target.reset()
    } else {
      throw new Error(await response.text())
    }
  } catch (error) {
    alert("Ocorreu um erro ao criar o produto. Por favor, tente novamente.")
    console.error(error)
  }
}

const form = document.getElementById("create-product")

if (form) {
  form.addEventListener("submit", createProduct)
}
