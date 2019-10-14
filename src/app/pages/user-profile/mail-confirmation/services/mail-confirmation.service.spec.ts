import { TestBed } from '@angular/core/testing';

import { MailConfirmationService } from './mail-confirmation.service';

describe('MailConfirmationService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: MailConfirmationService = TestBed.get(MailConfirmationService);
    expect(service).toBeTruthy();
  });
});
