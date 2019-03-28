<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Products API</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/prism/1.5.1/themes/prism-okaidia.min.css" />
    <style>
      blockquote {
        border-left: solid 4px #eee;
        padding-left: 8px;
        font-style: italic;
        margin-left: 0;
        padding: 8px;
      }

      .ui.micro.label {
        font-size: .25rem;
      }

      .ui.transaction.accordion .title {
        text-align: center;
      }

      .ui.transaction.accordion .content {
        border-top: solid 1px #ddd !important;
        border-bottom: solid 1px #ddd !important;
        background-color: rgba(0,0,0,.03);
        padding: 0.5em 1em !important;
      }

      .ui.transaction.accordion .content.active {
        margin-top: 0.5em;
      }

      .ui.basic.label {
        text-align: left;
        overflow: auto;
      }

      .resource .ui.sub.header {
        text-transform: none;
      }

      @media only screen and (min-width: 768px) {
        .sidewrap {
          margin-right: 2rem;
        }

        .sidenav {
          left: 0;
          top: 0;
          width: inherit;
          position: fixed !important;
          height: 100% !important;
          overflow-y: auto !important;
          padding-left: 0.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="ui padded grid">
      <div class="sidewrap four wide computer five wide tablet sixteen wide mobile column">
        <div class="sidenav">
          
<div class="ui horizontal divider">
  <a href="#introduction">Introduction</a>
</div>
<div class="ui fluid secondary vertical menu">
  <a class="item" href="#introduction">Products API</a>
</div>


<div class="ui accordion fluid">
  
    
    <div class="title active">
      <i class="dropdown icon"></i>
      
        <strong>Products</strong>
      
    </div>
    <div class="content active">
      <div class="ui fluid secondary vertical menu">
      
        <a class="item green" href="#products-list-of-products">
          <i class="ui green empty circular label"></i>
          
            <span>List of Products</span>
          
        </a>
      
        <a class="item green" href="#products-retrieve-product">
          <i class="ui green empty circular label"></i>
          
            <span>Retrieve Product</span>
          
        </a>
      
        <a class="item green" href="#products-retrieve-product-%28not-found-response%29">
          <i class="ui green empty circular label"></i>
          
            <span>Retrieve Product (not found response)</span>
          
        </a>
      
        <a class="item red" href="#products-delete-product">
          <i class="ui red empty circular label"></i>
          
            <span>Delete Product</span>
          
        </a>
      
        <a class="item red" href="#products-delete-product-%28not-found-response%29">
          <i class="ui red empty circular label"></i>
          
            <span>Delete Product (not found response)</span>
          
        </a>
      
        <a class="item blue" href="#products-create-product">
          <i class="ui blue empty circular label"></i>
          
            <span>Create Product</span>
          
        </a>
      
        <a class="item teal" href="#products-update-a-product">
          <i class="ui teal empty circular label"></i>
          
            <span>Update a Product</span>
          
        </a>
      
        <a class="item teal" href="#products-update-a-product-%28not-found-response%29">
          <i class="ui teal empty circular label"></i>
          
            <span>Update a Product (not found response)</span>
          
        </a>
      
        <a class="item green" href="#products-search-products-by-name">
          <i class="ui green empty circular label"></i>
          
            <span>Search Products by name</span>
          
        </a>
      
        <a class="item green" href="#products-search-products-by-name-%28not-found-response%29">
          <i class="ui green empty circular label"></i>
          
            <span>Search Products by name (not found response)</span>
          
        </a>
      
        <a class="item green" href="#products-search-products-by-exact-name">
          <i class="ui green empty circular label"></i>
          
            <span>Search Products by exact name</span>
          
        </a>
      
        <a class="item green" href="#products-search-products-by-exact-name-%28not-found-response%29">
          <i class="ui green empty circular label"></i>
          
            <span>Search Products by exact name (not found response)</span>
          
        </a>
      
        <a class="item green" href="#products-complete-request-example%3a">
          <i class="ui green empty circular label"></i>
          
            <span>Complete request example:</span>
          
        </a>
      
      </div>
    </div>
    
  
</div>


        </div>
      </div>
      <div class="eleven wide computer ten wide tablet sixteen wide mobile column">
        
<div class="ui hidden divider header"></div>
<h1 class="ui huge header" id="introduction">Products API</h1>
<hr class="ui divider">
<div class="description">
  <p>Assigment by Erply Inc.</p>

</div>

        <div class="ui hidden divider"></div>
        

  <div class="ui horizontal divider" >
    
  </div>
  <div class="ui header center aligned">
    <div class="ui header">
      <div class="sub header">
        
      </div>
    </div>
  </div>
  
    
      <div class="ui stacked segments">
        <div class="ui basic segment resource">
          <div class="ui purple huge ribbon label">
            Products
          </div>
          <div class="ui header">
            <div class="ui sub header">
              <p>In order to get an <span style="color:green"><b>API Token</b></span> you have to <a href="/login">Login</a> and Getting from your dashboard
or  you can generate a new <span style="color:green"><b>API Toke</b></span> invalidating the previews one.</p>

            </div>
          </div>
        </div>

        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-list-of-products">
              List of Products
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/{?api_token,page,per_page}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>page</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">1</code>
        
      </td>
      <td class="eight wide">
        -
        
      </td>
    </tr>
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>per_page</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">5</code>
        
      </td>
      <td class="eight wide">
        <p>Number of item per page (default 10) [Optional]</p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
    &#34;current_page&#34;: 1,
    &#34;data&#34;: [
        {
            &#34;id&#34;: 1,
            &#34;name&#34;: &#34;Incredible Iron Watch&#34;,
            &#34;price&#34;: &#34;531.63&#34;,
            &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
            &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
        },
        {
            &#34;id&#34;: 2,
            &#34;name&#34;: &#34;Lightweight Linen Gloves&#34;,
            &#34;price&#34;: &#34;312.60&#34;,
            &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
            &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
        },
        {
            &#34;id&#34;: 3,
            &#34;name&#34;: &#34;Sleek Concrete Chair&#34;,
            &#34;price&#34;: &#34;140.73&#34;,
            &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
            &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
        },
        {
            &#34;id&#34;: 4,
            &#34;name&#34;: &#34;Awesome Copper Watch&#34;,
            &#34;price&#34;: &#34;440.90&#34;,
            &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
            &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
        },
        {
            &#34;id&#34;: 5,
            &#34;name&#34;: &#34;Fantastic Wool Keyboard&#34;,
            &#34;price&#34;: &#34;842.93&#34;,
            &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
            &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
        }
    ],
    &#34;first_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=1&#34;,
    &#34;from&#34;: 1,
    &#34;last_page&#34;: 10,
    &#34;last_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=10&#34;,
    &#34;next_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=2&#34;,
    &#34;path&#34;: &#34;http://127.0.0.1:8080/api/products&#34;,
    &#34;per_page&#34;: &#34;5&#34;,
    &#34;prev_page_url&#34;: null,
    &#34;to&#34;: 5,
    &#34;total&#34;: 50
}
</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-retrieve-product">
              Retrieve Product
            </h3>
            <div class="description"><p>This return product by id.</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/{id}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>id</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">3</code>
        
      </td>
      <td class="eight wide">
        <p>Product id</p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">   {
       &#34;product&#34;: {
           &#34;id&#34;: 3,
           &#34;name&#34;: &#34;Sleek Concrete Chair&#34;,
           &#34;price&#34;: &#34;140.73&#34;,
           &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
           &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
       }
   }
</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-retrieve-product-(not-found-response)">
              Retrieve Product (not found response)
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/{id}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>id</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">294949</code>
        
      </td>
      <td class="eight wide">
        <p>Product id</p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked orange segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui orange circular label">
                      404
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;code&#34;: 404,
  &#34;message&#34;: &#34;Record not found!&#34;
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-delete-product">
              Delete Product
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui red large button">
                  <h3>DELETE</h3>
                </div>
                <a class="ui basic fluid red label">
                  <code>/api/products/{id}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>id</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">1</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      204
                    </a>
                    <code></code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-"></code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-delete-product-(not-found-response)">
              Delete Product (not found response)
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui red large button">
                  <h3>DELETE</h3>
                </div>
                <a class="ui basic fluid red label">
                  <code>/api/products/{id}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>id</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">294949</code>
        
      </td>
      <td class="eight wide">
        <p>Product id</p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked orange segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui orange circular label">
                      404
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;code&#34;: 404,
  &#34;message&#34;: &#34;Record not found!&#34;
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-create-product">
              Create Product
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui blue large button">
                  <h3>POST</h3>
                </div>
                <a class="ui basic fluid blue label">
                  <code>/api/products</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">Product X</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>price</code></td>
      <td class="center aligned">
        <code>price format</code>
        <code class="ui label">13.33</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;product&#34;: {
    &#34;name&#34;: &#34;Product X&#34;,
    &#34;price&#34;: &#34;13.33&#34;,
    &#34;updated_at&#34;: &#34;2019-03-27 04:53:32&#34;,
    &#34;created_at&#34;: &#34;2019-03-27 04:53:32&#34;,
    &#34;id&#34;: 52
  }
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-update-a-product">
              Update a Product
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui teal large button">
                  <h3>PUT</h3>
                </div>
                <a class="ui basic fluid teal label">
                  <code>/api/products/52</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">Product X</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>price</code></td>
      <td class="center aligned">
        <code>price format</code>
        <code class="ui label">24.33</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;product&#34;: {
    &#34;id&#34;: 52,
    &#34;name&#34;: &#34;Product X&#34;,
    &#34;price&#34;: &#34;23.33&#34;,
    &#34;created_at&#34;: &#34;2019-03-27 04:53:32&#34;,
    &#34;updated_at&#34;: &#34;2019-03-27 05:00:42&#34;
  }
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-update-a-product-(not-found-response)">
              Update a Product (not found response)
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui teal large button">
                  <h3>PUT</h3>
                </div>
                <a class="ui basic fluid teal label">
                  <code>/api/products/{id}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>id</code></td>
      <td class="center aligned">
        <code>number</code>
        <code class="ui label">294949</code>
        
      </td>
      <td class="eight wide">
        <p>Product id</p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked orange segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui orange circular label">
                      404
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;code&#34;: 404,
  &#34;message&#34;: &#34;Record not found!&#34;
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-search-products-by-name">
              Search Products by name
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/search/{product_name}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>product_name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">chair</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;current_page&#34;: 1,
  &#34;data&#34;: [
    {
      &#34;id&#34;: 11,
      &#34;name&#34;: &#34;Fantastic Wooden Chair&#34;,
      &#34;price&#34;: &#34;676.20&#34;,
      &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
      &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
    },
    {
      &#34;id&#34;: 13,
      &#34;name&#34;: &#34;Durable Paper Chair&#34;,
      &#34;price&#34;: &#34;918.52&#34;,
      &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
      &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
    },
    {
      &#34;id&#34;: 26,
      &#34;name&#34;: &#34;Incredible Silk Chair&#34;,
      &#34;price&#34;: &#34;68.45&#34;,
      &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
      &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
    },
    {
      &#34;id&#34;: 33,
      &#34;name&#34;: &#34;Gorgeous Copper Chair&#34;,
      &#34;price&#34;: &#34;405.85&#34;,
      &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
      &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
    }
  ],
  &#34;first_page_url&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/chair?page=1&#34;,
  &#34;from&#34;: 1,
  &#34;last_page&#34;: 1,
  &#34;last_page_url&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/chair?page=1&#34;,
  &#34;next_page_url&#34;: null,
  &#34;path&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/chair&#34;,
  &#34;per_page&#34;: &#34;10&#34;,
  &#34;prev_page_url&#34;: null,
  &#34;to&#34;: 4,
  &#34;total&#34;: 4
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-search-products-by-name-(not-found-response)">
              Search Products by name (not found response)
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/search/{product_name}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>product_name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">chair old</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked orange segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui orange circular label">
                      404
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;code&#34;: 404,
  &#34;message&#34;: &#34;Record not found!&#34;
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-search-products-by-exact-name">
              Search Products by exact name
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/searchexact/{product_name}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>product_name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">Fantastic Wooden Chair</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;current_page&#34;: 1,
  &#34;data&#34;: [
    {
      &#34;id&#34;: 11,
      &#34;name&#34;: &#34;Fantastic Wooden Chair&#34;,
      &#34;price&#34;: &#34;676.20&#34;,
      &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
      &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
    }
  ],
  &#34;first_page_url&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/Fantastic%20Wooden%20Chair?page=1&#34;,
  &#34;from&#34;: 1,
  &#34;last_page&#34;: 1,
  &#34;last_page_url&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/Fantastic%20Wooden%20Chair?page=1&#34;,
  &#34;next_page_url&#34;: null,
  &#34;path&#34;: &#34;http:\/\/127.0.0.1:8080\/api\/products\/search\/Fantastic%20Wooden%20Chair&#34;,
  &#34;per_page&#34;: &#34;10&#34;,
  &#34;prev_page_url&#34;: null,
  &#34;to&#34;: 1,
  &#34;total&#34;: 1
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-search-products-by-exact-name-(not-found-response)">
              Search Products by exact name (not found response)
            </h3>
            <div class="description"><p>When the Product don&rsquo;t exist</p>
</div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/searchexact/{product_name}{?api_token}</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>product_name</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">Fantastic Wooden Chair New</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span></p>

        
      </td>
    </tr>
  

                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked orange segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui orange circular label">
                      404
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">{
  &#34;code&#34;: 404,
  &#34;message&#34;: &#34;Record not found!&#34;
}

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
          
<div class="ui grey horizontal small divider header">
  <i class="ui grey micro circular label"></i>
  <i class="ui pink micro circular label"></i>
  <i class="ui grey micro circular label"></i>
</div>

          <div class="ui basic segment">
            <h3 class="ui block center aligned header" id="products-complete-request-example:">
              Complete request example:
            </h3>
            <div class="description"></div>

            
              <h4 class="ui horizontal divider">
                REQUEST
              </h4>
              <div class="description"></div>
              <div class="fluid ui large labeled button">
                <div class="ui green large button">
                  <h3>GET</h3>
                </div>
                <a class="ui basic fluid green label">
                  <code>/api/products/?api_token=5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm&amp;page=5&amp;per_page=1</code>
                </a>
              </div>
              
                <table class="ui celled definition table">
                  <thead>
                    <tr>
                      <th colspan="4">Parameters</th>
                    </tr>
                  <thead>
                  <tbody>
                    
                    
                      
  
    <tr>
      <td class="center aligned one wide">
        <i class="ui empty circular label black" data-content="required" data-position="top center"></i>
      </td>
      <td><code>api_token</code></td>
      <td class="center aligned">
        <code>string</code>
        <code class="ui label">5RbMmslwfbLZs64qQ1P97DUumpaS4eLpTIHBDpCsuX0ntXqlxQzshjTbkDLm</code>
        
      </td>
      <td class="eight wide">
        <p><span style="color:red"><em>Required</em> </span> Generated after login</p>

        
      </td>
    </tr>
  

                    
                  </tbody>
                </table>
              
              
              

              <h4 class="ui horizontal divider">RESPONSE</h4>
              <div class="description"></div>
              
<table class="ui celled definition table">
  <thead>
    <tr>
      <th colspan="2">Headers</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td class="four wide">Content-Type</td>
      <td><code>application/json</code></td>
    </tr>
  
  </tbody>
</table>

              <div class="ui stacked blue segment">
                <div class="ui fluid transaction accordion">
                  <div class="title center aligned">
                    <a class="ui blue circular label">
                      200
                    </a>
                    <code>application/json</code>
                  </div>
                  <div class="content tabbed">
                    <div class="ui top attached tabular menu">
                      <a data-tab="body" class="active item">BODY</a>
                      <a data-tab="schema" class="item">SCHEMA</a>
                    </div>
                    <div class="ui bottom attached active tab segment" data-tab="body">
                      <pre style="white-space: inherit">
                        <code class="language-json">    {
        &#34;current_page&#34;: 1,
        &#34;data&#34;: [
            {
                &#34;id&#34;: 1,
                &#34;name&#34;: &#34;Incredible Iron Watch&#34;,
                &#34;price&#34;: &#34;531.63&#34;,
                &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
                &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
            },
            {
                &#34;id&#34;: 2,
                &#34;name&#34;: &#34;Lightweight Linen Gloves&#34;,
                &#34;price&#34;: &#34;312.60&#34;,
                &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
                &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
            },
            {
                &#34;id&#34;: 3,
                &#34;name&#34;: &#34;Sleek Concrete Chair&#34;,
                &#34;price&#34;: &#34;140.73&#34;,
                &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
                &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
            },
            {
                &#34;id&#34;: 4,
                &#34;name&#34;: &#34;Awesome Copper Watch&#34;,
                &#34;price&#34;: &#34;440.90&#34;,
                &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
                &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
            },
            {
                &#34;id&#34;: 5,
                &#34;name&#34;: &#34;Fantastic Wool Keyboard&#34;,
                &#34;price&#34;: &#34;842.93&#34;,
                &#34;created_at&#34;: &#34;2019-03-27 04:23:45&#34;,
                &#34;updated_at&#34;: &#34;2019-03-27 04:23:45&#34;
            }
        ],
        &#34;first_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=1&#34;,
        &#34;from&#34;: 1,
        &#34;last_page&#34;: 10,
        &#34;last_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=10&#34;,
        &#34;next_page_url&#34;: &#34;http://127.0.0.1:8080/api/products?page=2&#34;,
        &#34;path&#34;: &#34;http://127.0.0.1:8080/api/products&#34;,
        &#34;per_page&#34;: &#34;5&#34;,
        &#34;prev_page_url&#34;: null,
        &#34;to&#34;: 5,
        &#34;total&#34;: 50
    }

</code>
                      </pre>
                    </div>
                    <div class="ui bottom attached tab segment" data-tab="schema">
                      <pre style="white-space: inherit">
                        <code class="language-json"></code>
                      </pre>
                    </div>
                  </div>
                </div>
              </div>
            
          </div>
        
        </div>
      <div class="ui hidden divider"></div>
    
  


      </div>
    </div>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/accordion.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/tab.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/transition.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/popup.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/prism.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/prism/1.13.0/components/prism-json.min.js"></script>
    <script type="text/javascript">
      $(function() {
        $('.ui.accordion').accordion({ animateChildren: false, duration: 0 });
        $('.content.tabbed').each(function(index) {
          $('.ui.tabular .item', $(this)).tab({ context: $(this) });
        });
        $('.ui.vertical.menu').on('click', '.item', function() {
          $('.ui.vertical.menu .item').removeClass('active');
          $(this).addClass('active');
        });
        $('.ui.empty.circular.label').popup();
      });
    </script>
  </body>
</html>












