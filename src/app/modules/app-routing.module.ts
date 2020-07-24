import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from '../pages/home/home.component';
import { AuthGuard } from '../guards/auth.guard';

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
    path: 'about',
    loadChildren: () => import('../pages/birja-info/about/modules/about.module').then(m => m.AboutModule)
  },
  {
    path: 'companyInfo',
    loadChildren: () => import('../pages/company-info/main/modules/main.module').then(m => m.MainModule)
  },
  {
    path: 'dashboard',
    canActivate: [AuthGuard],
    loadChildren: () => import('../pages/user-profile/dashboard/modules/dashboard.module').then(m => m.DashboardModule)
  },
  {
    path: 'contact-us',
    loadChildren: () => import('../pages/birja-info/contact-us/modules/contact-us.module').then(m => m.ContactUsModule)
  },
  {
    path: 'birja-top',
    loadChildren: () => import('../pages/birja-info/birja-top/modules/birja-top.module').then(m => m.BirjaTopModule)
  },

  {
    path: 'confirm-email/:id',
    canActivate: [AuthGuard],
    // tslint:disable-next-line: max-line-length
    loadChildren: () => import('../pages/user-profile/mail-confirmation/modules/mail-confirmation.module').then(m => m.MailConfirmationModule)
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
