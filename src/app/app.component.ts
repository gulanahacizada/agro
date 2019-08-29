import { Component, OnInit} from '@angular/core';
import { AppService } from './services/app/app.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import {TranslateService} from '@ngx-translate/core';
import * as $ from "jquery";

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

  constructor(
    private appService: AppService,
    private fb: FormBuilder,
    private router: Router,
    private translate: TranslateService
   ) {
    this.translate.setDefaultLang('az');
    // this.translate.use('az');

   }

   ngOnInit() {
    this.createLoginForm();
    this.createCompanyForm();
    this.createCustomerForm();
    this.loggedIn();
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
        console.log(response);
        localStorage.setItem( 'acc_jwt', response.access_token);
        // this.router.navigate(['home']);
        $('.login-modal').removeClass('open');
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
        }
      );
    }
  }

  registerCustomer() {
    if (this.customerRegister.valid) {
      const data = Object.assign({}, this.customerRegister.value);
      this.appService.register(data).subscribe(response => {
        localStorage.setItem( 'acc_jwt', response.access_token);
          // this.router.navigate(['']);
        $('.registration-modal').removeClass('open');
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

}

