import { SalesProductsComponent } from './../components/sales-products/sales-products.component';
import { ProductsInComponent } from './../components/products-in/products-in.component';
import { ProductsComponent } from './../products.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AddProductComponent } from '../components/add-product/add-product.component';
import { EditProductComponent } from '../components/edit-product/edit-product.component';

const routes: Routes = [
  {
    path: '',
    children: [
      {
        path: '',
        component: ProductsComponent
      },
      {
        path: 'in',
        component: ProductsInComponent
      },
      {
        path: 'sales',
        component: SalesProductsComponent
      },
      {
        path: 'add',
        component: AddProductComponent
      },
      {
        path: 'edit',
        component: EditProductComponent
      },

    ]

  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class ProductsRoutingModule { }
