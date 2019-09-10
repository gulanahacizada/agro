
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
        path: 'details/:id',
        component: ProductsInComponent
      },
      {
        path: 'add',
        component: AddProductComponent
      },
      {
        path: 'edit/:id',
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
