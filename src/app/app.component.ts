import { Component, OnInit} from '@angular/core';
import { AppService } from './services/app/app.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import {TranslateService} from '@ngx-translate/core';
import * as $ from 'jquery';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {
  title = 'Birja';
  loginForm: FormGroup;
  companyRegister: FormGroup;
  customerRegister: FormGroup;
  jwtHelper: any;
  myCarouselImages: any;
  currencyResponse: any;
  metalResponse: any;

  constructor(
    private appService: AppService,
    private fb: FormBuilder,
    private router: Router,
    private translate: TranslateService
   ) {
    this.translate.setDefaultLang('az');
    this.myCarouselImages = [1, 2, 3, 4, 5, 6].map((i) => `https://picsum.photos/640/480?image=${i}`);
    // this.translate.use('az');

   }

   ngOnInit() {
    this.createLoginForm();
    this.createCompanyForm();
    this.createCustomerForm();
    this.loggedIn();
    // this.getMetals();
    // this.getCurrency();
  }

   createLoginForm() {
    this.loginForm = this.fb.group({
      username: ['', [Validators.required]],
      password: ['', [Validators.required]]
    });
   }

   createCompanyForm() {
     this.companyRegister = this.fb.group({
      name: ['', Validators.required],
      username: ['', Validators.required],
      password: ['', Validators.required],
      confirmPassword: ['', Validators.required],
      is_company: [1],
      role: [ 3, Validators.required],
      email: ['', [Validators.required, Validators.email]],
      phone: ['']
     },
     {validator: this.passwordMatchValidator});
   }
   passwordMatchValidator(g: FormGroup) {
    return g.get('password').value === g.get('confirmPassword').value ? null : {mismatch: true};
  }

   createCustomerForm() {
    this.customerRegister = this.fb.group({
      name: ['', Validators.required],
      username: ['', Validators.required],
      password: ['', Validators.required],
      confirmPassword: ['', Validators.required],
      is_company: [0],
      role: [1, Validators.required],
      email: ['', [Validators.required, Validators.email]],
      phone: ['']
    },
    {validator: this.passwordMatchValidator});
  }

   login() {
    if (this.loginForm.valid) {
      const data = Object.assign({}, this.loginForm.value);
      console.log(data);
      this.appService.login(data).subscribe( response => {
        localStorage.setItem( 'acc_jwt', response.responseContent.access_token);
        // this.router.navigate(['home']);
        $('.login-modal').removeClass('open');
        $('body').removeClass('o-hidden');
      });
    }
   }

   registerCompany() {
    if (this.companyRegister.valid) {
      const data = Object.assign({}, this.companyRegister.value);
      this.appService.register(data).subscribe(response => {
            localStorage.setItem( 'acc_jwt', response.access_token);
            // this.router.navigate(['']);
            $('.registration-modal').removeClass('open');
            $('body').removeClass('o-hidden');
        }
      );
    }
  }

  registerCustomer() {
    if (this.customerRegister.valid) {
      const data = Object.assign({}, this.customerRegister.value);
      this.appService.register(data).subscribe(response => {
        localStorage.setItem( 'acc_jwt', response.access_token);
          // this.rguouter.navigate(['']);
        $('.registration-modal').removeClass('open');
        $('body').removeClass('o-hidden');
        }
      );
    }
  }

  logOut() {
    this.appService.logout().subscribe( () => {
        localStorage.clear();
        this.router.navigate(['/home']);
    });
  }

  loggedIn() {
    const token = localStorage.getItem('acc_jwt');
    return !token;
  }

  useLanguage(language: string) {
    this.translate.use(language);
}

getCurrency() {
  this.appService.currency().subscribe( response => {
    this.currencyResponse = response;
  });
}

getMetals() {
  this.appService.metals().subscribe( response => {
    this.metalResponse = response;
  });
}






}

