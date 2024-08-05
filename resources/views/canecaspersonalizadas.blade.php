@extends('layouts.main')
@section('content')
	<style>
    .product-images img {
      width: 100%;
      margin-bottom: 10px;
    }

    .product-details {
      padding: 20px;
    }

    .product-images .thumbs img {
      width: 60px;
      cursor: pointer;
    }

    .product-images .thumbs {
      margin-bottom: 10px;
    }

    .price {
      font-size: 1.5em;
      color: green;
    }

    .discount-price {
      text-decoration: line-through;
      color: red;
    }

    .btn-upload {
      background-color: red;
      color: white;
      margin-top: 10px;
    }

    .payment-methods img {
      width: 24px;
      margin-right: 10px;
    }

    .payment-methods .price {
      font-size: 1.25em;
      font-weight: bold;
    }
  </style>
  <div class="container mt-4">
    <div class="row">
      <!-- Imagens do Produto -->
      <div class="col-md-4">
        <div class="product-images">
          <div class="thumbs mb-2">
            <img src="{{ asset('pagina de venda/imagem1.png') }}" alt="Produto 1" class="img-thumbnail">
            <img src="{{ asset('pagina de venda/imagem2.png') }}" alt="Produto 2" class="img-thumbnail">
            <img src="{{ asset('pagina de venda/imagem3.png') }}" alt="Produto 3" class="img-thumbnail">
            <img src="{{ asset('pagina de venda/imagem4.png') }}" alt="Produto 4" class="img-thumbnail">
          </div>
          <img src="{{ asset('pagina de venda/imagem5.png') }}" alt="Produto Principal" class="img-fluid">
        </div>
      </div>
    <!-- Detalhes do Produto -->
    <div class="col-md-8">
      <div class="product-details">
        <h1 class="product-title">Caneca Personalizada do seu Jeito </h1>
        
        <p class="price">R$ 30,00 <span class="discount-price">R$ 35,00</span></p>
        <p>até 2x de R$ 15,00 sem juros</p>

        <div class="card p-3">
          <table class="table table-striped">
            <thead> 
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="col-8">
                    <img src="{{ asset('icones/pix.png') }}" alt="Pix" class="img-fluid mr-2">  
                  </div>
                </td>
                <td>R$ 28,50</td>
                
              </tr>
              <tr>
                <td>
                  <div class="col-8">
                    <img src="{{ asset('icones/boleto.png') }}" alt="Boleto Bancário" class="img-fluid mr-2">
                  </div>
                </td>
                
                <td>
                  R$ 30,00
                </td>

              </tr>
              <tr>
                <td>
                  <div class="col-6">
                      <img src="{{ asset('icones/cartao.png') }}" alt="Cartões" class="img-fluid mr-2">
                  </div>
                </td>
                
                <td>
                  <div class="col-12">
                      <span class="font-weight-bold">Parcelas</span>
                      <span class="d-block">1x de R$ 30,00 sem juros</span>
                      <span class="d-block">2x de R$ 15,00 sem juros</span>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <h4 class="mt-4 mb-4">Anexar Arquivos</h4>

        <form>
          <table class="table table-striped">
              <tbody>
                <tr>
                  <td>
                    <label for="file1">Envie a foto 1</label>
                  </td>
                  <td>
                    <input type="file" class="form-control-file" id="file1">
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="file2">Envie a foto 2</label>
                  </td>

                  <td>
                    <input type="file" class="form-control-file" id="file2">
                  </td>
                </tr>
              </tbody>
          </table>
          <div class="form-group mb-2">
            <label for="observacoes">Observações</label>
            <textarea class="form-control" id="observacoes" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection