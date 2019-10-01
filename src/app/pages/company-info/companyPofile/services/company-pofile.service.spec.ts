import { TestBed } from '@angular/core/testing';

import { CompanyPofileService } from './company-pofile.service';

describe('CompanyPofileService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: CompanyPofileService = TestBed.get(CompanyPofileService);
    expect(service).toBeTruthy();
  });
});
