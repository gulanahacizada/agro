import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MainComponent } from '../main.component';

const routes: Routes = [{
  path: '',
  component: MainComponent,
  children: [
    {
      path: 'products/:id',
      loadChildren: () => import('../../products/modules/products.module').then(m => m.ProductsModule)
    },
    {
      path: 'profile/:id',
      loadChildren: () => import('../../info/modules/info.module').then(m => m.InfoModule)
    },
    {
      path: '', redirectTo: 'profile', pathMatch: 'full'
    },
  ]
}];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class MainRoutingModule { }
