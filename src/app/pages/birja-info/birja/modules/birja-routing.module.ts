import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { BirjaComponent } from '../birja.component';
import { ProductDetailComponent } from '../components/productDetail/productDetail.component';

const routes: Routes = [

  {
    path: '',
    component: BirjaComponent
  },
  {
    path: 'details/:id',
    component: ProductDetailComponent
  },

];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class BirjaRoutingModule { }
