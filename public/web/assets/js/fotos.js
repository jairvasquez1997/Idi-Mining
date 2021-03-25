$(document).ready(function () {
    var userFeed = new Instafeed({
        get: 'user',
        userId: 7717865416,
        accessToken: '7717865416.1677ed0.473b603fe9e44b569c7b719d58babf7e',
        target: 'instafeed0',
        limit: '6',
        template: '<a href="{\{\link\}\}" data-lightbox="lightbox" class="zoom__icon">'+
                        '<img src="{\{\image\}\}" alt="portfolio img">'+
                    '</a>',
    resolution: 'low_resolution'
        
    });
    userFeed.run();

    var userFeed = new Instafeed({
        get: 'user',
        userId: 7717865416,
        accessToken: '7717865416.1677ed0.473b603fe9e44b569c7b719d58babf7e',
        target: 'instafeed1',
        limit: '15',
        template:  '<div class="col-sm-6 col-md-6 col-lg-4" class="row grid">'+
                        '<div class="filter-clients">'+
                            '<div class="portfolio-item">'+
                                '<div class="portfolio__img">'+
                                    '<a>'+
                                        '<img src="{\{\image\}\}" alt="portfolio img">'+
                                    '</a>'+
                                '</div>'+
                                '<div class="portfolio__hover">'+
                                    '<a href="{\{\image\}\}" data-lightbox="lightbox" class="zoom__icon">'+'</a>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>',
    resolution: 'low_resolution'
        
    });
    userFeed.run();
});