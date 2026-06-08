import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        console.log('Stimulus fonctionne 🚀');
        this.element.innerHTML = "Hello depuis Stimulus 👋";
    }
}
