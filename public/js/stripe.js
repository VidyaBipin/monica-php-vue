(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/stripe"],{

/***/ "./resources/assets/js/stripe.js":
/*!***************************************!*\
  !*** ./resources/assets/js/stripe.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var elements = stripe.elements(); // Custom styling can be passed to options when creating an Element.\n// (Note that this demo uses a wider set of styles than the guide below.)\n\nvar style = {\n  base: {\n    color: '#32325d',\n    lineHeight: '18px',\n    fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',\n    fontSmoothing: 'antialiased',\n    fontSize: '16px',\n    '::placeholder': {\n      color: '#aab7c4'\n    }\n  },\n  invalid: {\n    color: '#fa755a',\n    iconColor: '#fa755a'\n  }\n}; // Create an instance of the card Element\n\nvar card = elements.create('card', {\n  hidePostalCode: true,\n  style: style\n}); // Add an instance of the card Element into the `card-element` <div>\n\ncard.mount('#card-element'); // Handle real-time validation errors from the card Element.\n\ncard.addEventListener('change', function (event) {\n  var displayError = document.getElementById('card-errors');\n\n  if (event.error) {\n    displayError.textContent = event.error.message;\n  } else {\n    displayError.textContent = '';\n  }\n}); // Handle form submission\n\nvar form = document.getElementById('payment-form');\nform.addEventListener('submit', function (event) {\n  event.preventDefault();\n  var extraDetails = {\n    name: this.querySelector('input[name=cardholder-name]').value,\n    address_zip: this.querySelector('input[name=address-zip]').value\n  };\n  stripe.createToken(card, extraDetails).then(function (result) {\n    if (result.error) {\n      // Inform the user if there was an error\n      var errorElement = document.getElementById('card-errors');\n      errorElement.textContent = result.error.message;\n    } else {\n      // Send the token to your server\n      stripeTokenHandler(result.token);\n    }\n  });\n});\n\nfunction stripeTokenHandler(token) {\n  // Insert the token ID into the form so it gets submitted to the server\n  var form = document.getElementById('payment-form');\n  var hiddenInput = document.createElement('input');\n  hiddenInput.setAttribute('type', 'hidden');\n  hiddenInput.setAttribute('name', 'stripeToken');\n  hiddenInput.setAttribute('value', token.id);\n  form.appendChild(hiddenInput); // Submit the form\n\n  form.submit();\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3N0cmlwZS5qcz9hZmNhIl0sIm5hbWVzIjpbImVsZW1lbnRzIiwic3RyaXBlIiwic3R5bGUiLCJiYXNlIiwiY29sb3IiLCJsaW5lSGVpZ2h0IiwiZm9udEZhbWlseSIsImZvbnRTbW9vdGhpbmciLCJmb250U2l6ZSIsImludmFsaWQiLCJpY29uQ29sb3IiLCJjYXJkIiwiY3JlYXRlIiwiaGlkZVBvc3RhbENvZGUiLCJtb3VudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsImRpc3BsYXlFcnJvciIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJlcnJvciIsInRleHRDb250ZW50IiwibWVzc2FnZSIsImZvcm0iLCJwcmV2ZW50RGVmYXVsdCIsImV4dHJhRGV0YWlscyIsIm5hbWUiLCJxdWVyeVNlbGVjdG9yIiwidmFsdWUiLCJhZGRyZXNzX3ppcCIsImNyZWF0ZVRva2VuIiwidGhlbiIsInJlc3VsdCIsImVycm9yRWxlbWVudCIsInN0cmlwZVRva2VuSGFuZGxlciIsInRva2VuIiwiaGlkZGVuSW5wdXQiLCJjcmVhdGVFbGVtZW50Iiwic2V0QXR0cmlidXRlIiwiaWQiLCJhcHBlbmRDaGlsZCIsInN1Ym1pdCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsUUFBUSxHQUFHQyxNQUFNLENBQUNELFFBQVAsRUFBZixDLENBRUE7QUFDQTs7QUFDQSxJQUFJRSxLQUFLLEdBQUc7QUFDVkMsTUFBSSxFQUFFO0FBQ0pDLFNBQUssRUFBRSxTQURIO0FBRUpDLGNBQVUsRUFBRSxNQUZSO0FBR0pDLGNBQVUsRUFBRSx5Q0FIUjtBQUlKQyxpQkFBYSxFQUFFLGFBSlg7QUFLSkMsWUFBUSxFQUFFLE1BTE47QUFNSixxQkFBaUI7QUFDZkosV0FBSyxFQUFFO0FBRFE7QUFOYixHQURJO0FBV1ZLLFNBQU8sRUFBRTtBQUNQTCxTQUFLLEVBQUUsU0FEQTtBQUVQTSxhQUFTLEVBQUU7QUFGSjtBQVhDLENBQVosQyxDQWlCQTs7QUFDQSxJQUFJQyxJQUFJLEdBQUdYLFFBQVEsQ0FBQ1ksTUFBVCxDQUFnQixNQUFoQixFQUF3QjtBQUNqQ0MsZ0JBQWMsRUFBRSxJQURpQjtBQUVqQ1gsT0FBSyxFQUFFQTtBQUYwQixDQUF4QixDQUFYLEMsQ0FLQTs7QUFDQVMsSUFBSSxDQUFDRyxLQUFMLENBQVcsZUFBWCxFLENBRUE7O0FBQ0FILElBQUksQ0FBQ0ksZ0JBQUwsQ0FBc0IsUUFBdEIsRUFBZ0MsVUFBU0MsS0FBVCxFQUFnQjtBQUM5QyxNQUFJQyxZQUFZLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixhQUF4QixDQUFuQjs7QUFDQSxNQUFJSCxLQUFLLENBQUNJLEtBQVYsRUFBaUI7QUFDZkgsZ0JBQVksQ0FBQ0ksV0FBYixHQUEyQkwsS0FBSyxDQUFDSSxLQUFOLENBQVlFLE9BQXZDO0FBQ0QsR0FGRCxNQUVPO0FBQ0xMLGdCQUFZLENBQUNJLFdBQWIsR0FBMkIsRUFBM0I7QUFDRDtBQUNGLENBUEQsRSxDQVNBOztBQUNBLElBQUlFLElBQUksR0FBR0wsUUFBUSxDQUFDQyxjQUFULENBQXdCLGNBQXhCLENBQVg7QUFDQUksSUFBSSxDQUFDUixnQkFBTCxDQUFzQixRQUF0QixFQUFnQyxVQUFTQyxLQUFULEVBQWdCO0FBQzlDQSxPQUFLLENBQUNRLGNBQU47QUFFQSxNQUFJQyxZQUFZLEdBQUc7QUFDakJDLFFBQUksRUFBRSxLQUFLQyxhQUFMLENBQW1CLDZCQUFuQixFQUFrREMsS0FEdkM7QUFFakJDLGVBQVcsRUFBRSxLQUFLRixhQUFMLENBQW1CLHlCQUFuQixFQUE4Q0M7QUFGMUMsR0FBbkI7QUFLQTNCLFFBQU0sQ0FBQzZCLFdBQVAsQ0FBbUJuQixJQUFuQixFQUF5QmMsWUFBekIsRUFBdUNNLElBQXZDLENBQTRDLFVBQVNDLE1BQVQsRUFBaUI7QUFDM0QsUUFBSUEsTUFBTSxDQUFDWixLQUFYLEVBQWtCO0FBQ2hCO0FBQ0EsVUFBSWEsWUFBWSxHQUFHZixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsYUFBeEIsQ0FBbkI7QUFDQWMsa0JBQVksQ0FBQ1osV0FBYixHQUEyQlcsTUFBTSxDQUFDWixLQUFQLENBQWFFLE9BQXhDO0FBQ0QsS0FKRCxNQUlPO0FBQ0w7QUFDQVksd0JBQWtCLENBQUNGLE1BQU0sQ0FBQ0csS0FBUixDQUFsQjtBQUNEO0FBQ0YsR0FURDtBQVVELENBbEJEOztBQW9CQSxTQUFTRCxrQkFBVCxDQUE0QkMsS0FBNUIsRUFBbUM7QUFDakM7QUFDQSxNQUFJWixJQUFJLEdBQUdMLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixjQUF4QixDQUFYO0FBQ0EsTUFBSWlCLFdBQVcsR0FBR2xCLFFBQVEsQ0FBQ21CLGFBQVQsQ0FBdUIsT0FBdkIsQ0FBbEI7QUFDQUQsYUFBVyxDQUFDRSxZQUFaLENBQXlCLE1BQXpCLEVBQWlDLFFBQWpDO0FBQ0FGLGFBQVcsQ0FBQ0UsWUFBWixDQUF5QixNQUF6QixFQUFpQyxhQUFqQztBQUNBRixhQUFXLENBQUNFLFlBQVosQ0FBeUIsT0FBekIsRUFBa0NILEtBQUssQ0FBQ0ksRUFBeEM7QUFDQWhCLE1BQUksQ0FBQ2lCLFdBQUwsQ0FBaUJKLFdBQWpCLEVBUGlDLENBU2pDOztBQUNBYixNQUFJLENBQUNrQixNQUFMO0FBQ0QiLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2pzL3N0cmlwZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBlbGVtZW50cyA9IHN0cmlwZS5lbGVtZW50cygpO1xuXG4vLyBDdXN0b20gc3R5bGluZyBjYW4gYmUgcGFzc2VkIHRvIG9wdGlvbnMgd2hlbiBjcmVhdGluZyBhbiBFbGVtZW50LlxuLy8gKE5vdGUgdGhhdCB0aGlzIGRlbW8gdXNlcyBhIHdpZGVyIHNldCBvZiBzdHlsZXMgdGhhbiB0aGUgZ3VpZGUgYmVsb3cuKVxudmFyIHN0eWxlID0ge1xuICBiYXNlOiB7XG4gICAgY29sb3I6ICcjMzIzMjVkJyxcbiAgICBsaW5lSGVpZ2h0OiAnMThweCcsXG4gICAgZm9udEZhbWlseTogJ1wiSGVsdmV0aWNhIE5ldWVcIiwgSGVsdmV0aWNhLCBzYW5zLXNlcmlmJyxcbiAgICBmb250U21vb3RoaW5nOiAnYW50aWFsaWFzZWQnLFxuICAgIGZvbnRTaXplOiAnMTZweCcsXG4gICAgJzo6cGxhY2Vob2xkZXInOiB7XG4gICAgICBjb2xvcjogJyNhYWI3YzQnXG4gICAgfVxuICB9LFxuICBpbnZhbGlkOiB7XG4gICAgY29sb3I6ICcjZmE3NTVhJyxcbiAgICBpY29uQ29sb3I6ICcjZmE3NTVhJ1xuICB9XG59O1xuXG4vLyBDcmVhdGUgYW4gaW5zdGFuY2Ugb2YgdGhlIGNhcmQgRWxlbWVudFxudmFyIGNhcmQgPSBlbGVtZW50cy5jcmVhdGUoJ2NhcmQnLCB7XG4gIGhpZGVQb3N0YWxDb2RlOiB0cnVlLFxuICBzdHlsZTogc3R5bGVcbn0pO1xuXG4vLyBBZGQgYW4gaW5zdGFuY2Ugb2YgdGhlIGNhcmQgRWxlbWVudCBpbnRvIHRoZSBgY2FyZC1lbGVtZW50YCA8ZGl2PlxuY2FyZC5tb3VudCgnI2NhcmQtZWxlbWVudCcpO1xuXG4vLyBIYW5kbGUgcmVhbC10aW1lIHZhbGlkYXRpb24gZXJyb3JzIGZyb20gdGhlIGNhcmQgRWxlbWVudC5cbmNhcmQuYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgZnVuY3Rpb24oZXZlbnQpIHtcbiAgdmFyIGRpc3BsYXlFcnJvciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdjYXJkLWVycm9ycycpO1xuICBpZiAoZXZlbnQuZXJyb3IpIHtcbiAgICBkaXNwbGF5RXJyb3IudGV4dENvbnRlbnQgPSBldmVudC5lcnJvci5tZXNzYWdlO1xuICB9IGVsc2Uge1xuICAgIGRpc3BsYXlFcnJvci50ZXh0Q29udGVudCA9ICcnO1xuICB9XG59KTtcblxuLy8gSGFuZGxlIGZvcm0gc3VibWlzc2lvblxudmFyIGZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGF5bWVudC1mb3JtJyk7XG5mb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG5cbiAgdmFyIGV4dHJhRGV0YWlscyA9IHtcbiAgICBuYW1lOiB0aGlzLnF1ZXJ5U2VsZWN0b3IoJ2lucHV0W25hbWU9Y2FyZGhvbGRlci1uYW1lXScpLnZhbHVlLFxuICAgIGFkZHJlc3NfemlwOiB0aGlzLnF1ZXJ5U2VsZWN0b3IoJ2lucHV0W25hbWU9YWRkcmVzcy16aXBdJykudmFsdWUsXG4gIH07XG5cbiAgc3RyaXBlLmNyZWF0ZVRva2VuKGNhcmQsIGV4dHJhRGV0YWlscykudGhlbihmdW5jdGlvbihyZXN1bHQpIHtcbiAgICBpZiAocmVzdWx0LmVycm9yKSB7XG4gICAgICAvLyBJbmZvcm0gdGhlIHVzZXIgaWYgdGhlcmUgd2FzIGFuIGVycm9yXG4gICAgICB2YXIgZXJyb3JFbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NhcmQtZXJyb3JzJyk7XG4gICAgICBlcnJvckVsZW1lbnQudGV4dENvbnRlbnQgPSByZXN1bHQuZXJyb3IubWVzc2FnZTtcbiAgICB9IGVsc2Uge1xuICAgICAgLy8gU2VuZCB0aGUgdG9rZW4gdG8geW91ciBzZXJ2ZXJcbiAgICAgIHN0cmlwZVRva2VuSGFuZGxlcihyZXN1bHQudG9rZW4pO1xuICAgIH1cbiAgfSk7XG59KTtcblxuZnVuY3Rpb24gc3RyaXBlVG9rZW5IYW5kbGVyKHRva2VuKSB7XG4gIC8vIEluc2VydCB0aGUgdG9rZW4gSUQgaW50byB0aGUgZm9ybSBzbyBpdCBnZXRzIHN1Ym1pdHRlZCB0byB0aGUgc2VydmVyXG4gIHZhciBmb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3BheW1lbnQtZm9ybScpO1xuICB2YXIgaGlkZGVuSW5wdXQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpbnB1dCcpO1xuICBoaWRkZW5JbnB1dC5zZXRBdHRyaWJ1dGUoJ3R5cGUnLCAnaGlkZGVuJyk7XG4gIGhpZGRlbklucHV0LnNldEF0dHJpYnV0ZSgnbmFtZScsICdzdHJpcGVUb2tlbicpO1xuICBoaWRkZW5JbnB1dC5zZXRBdHRyaWJ1dGUoJ3ZhbHVlJywgdG9rZW4uaWQpO1xuICBmb3JtLmFwcGVuZENoaWxkKGhpZGRlbklucHV0KTtcblxuICAvLyBTdWJtaXQgdGhlIGZvcm1cbiAgZm9ybS5zdWJtaXQoKTtcbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/js/stripe.js\n");

/***/ }),

/***/ 1:
/*!*********************************************!*\
  !*** multi ./resources/assets/js/stripe.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/jordan/Sites/Laravel/monica/resources/assets/js/stripe.js */"./resources/assets/js/stripe.js");


/***/ })

},[[1,"/js/manifest"]]]);