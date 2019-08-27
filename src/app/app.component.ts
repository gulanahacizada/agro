import { Component, OnInit} from '@angular/core';
import { AppService } from './services/app/app.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';

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

  constructor(
    private appService: AppService,
    private fb: FormBuilder,
    private router: Router
   ) {}

   ngOnInit() {
    this.createLoginForm();
    this.createCompanyForm();
    this.createCustomerForm();
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
           // this.router.navigate(['']);
      });
    }
   }

   registerCompany() {
    if (this.companyRegister.valid) {
      const data = Object.assign({}, this.companyRegister.value);
      this.appService.register(data).subscribe(response => {
            localStorage.setItem( 'acc_jwt', response.access_token);
            // this.router.navigate(['']);
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
        }
      );
    }
  }

}

