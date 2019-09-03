import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from '../pages/home/home.component';

const routes: Routes = [

  {
    path: '',
    component: HomeComponent
  },

  {
    path: 'home',
    component: HomeComponent
  },

  {
    path: 'birja',
    loadChildren: () => import('../pages/birja-info/birja/modules/birja.module').then(m => m.BirjaModule)

  },

  {
    path: 'members',
    loadChildren: () => import('../pages/birja-info/members/modules/members.module').then(m => m.MembersModule)

  },

  {
    path: 'agronoms',
    loadChildren: () => import('../pages/birja-info/agronoms/modules/agronoms.module').then(m => m.AgronomsModule)
  },

  {
    path: 'news',
    loadChildren: () => import('../pages/birja-info/news/modules/news.module').then(m => m.NewsModule)
  },
  {
    path: 'user/products',
    loadChildren: () => import('../pages/user-profile/products/modules/products.module').then(m => m.ProductsModule)
  },
  {
    path: 'user/offers',
    loadChildren: () => import('../pages/user-profile/offers/modules/offers.module').then(m => m.OffersModule)
  },
  {
    path: 'user/profile',
    loadChildren: () => import('../pages/user-profile/profile/modules/profile.module').then(m => m.ProfileModule)
  }


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
