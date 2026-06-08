import { Application } from '@hotwired/stimulus';

const application = Application.start();

// auto-load controllers
import './controllers/index.js';
console.log('controllers import OK');
import './controllers';
