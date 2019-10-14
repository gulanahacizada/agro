import { Component, OnInit } from '@angular/core';
import { MembersService } from './services/members.service';
import { Response } from 'src/app/interfaces/response';

@Component({
  selector: 'app-members',
  templateUrl: './members.component.html',
  styleUrls: ['./members.component.scss']
})
export class MembersComponent implements OnInit {

  membersList: any;
  pagination = {
    per_page: 10,
    total: null,
    page: 1
  };

  constructor(
    public memberService: MembersService
  ) { }

  ngOnInit() {
    this.getMembers();
  }

  getMembers() {
    this.memberService.getAllUsers({ page: this.pagination.page, per_page: this.pagination.per_page }).subscribe((response: Response) => {
      this.membersList = response.responseContent.data;
      this.pagination.per_page = response.responseContent.per_page;
      this.pagination.total = response.responseContent.total;
    });
  }

  paginate(e) {
    this.pagination.page = e.page + 1;
    this.pagination.per_page = e.rows;
    this.getMembers();
  }

}
