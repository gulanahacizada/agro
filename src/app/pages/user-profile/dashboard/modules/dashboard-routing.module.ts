import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DashboardComponent } from '../dashboard.component';

const routes: Routes = [{
  path: '',
  component: DashboardComponent,
  children: [
    {
      path: 'products',
      loadChildren: () => import('../../products/modules/products.module').then(m => m.ProductsModule)
    },
    {
      path: 'offers',
      loadChildren: () => import('../../offers/modules/offers.module').then(m => m.OffersModule)
    },
    {
      path: 'profile',
      loadChildren: () => import('../../profile/modules/profile.module').then(m => m.ProfileModule)
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
export class DashboardRoutingModule { }
